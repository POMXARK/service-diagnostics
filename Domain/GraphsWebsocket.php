<?php

namespace Domain;

use Ratchet\ConnectionInterface;
use Ratchet\WebSocket\MessageComponentInterface;

class GraphsWebsocket implements MessageComponentInterface
{

    protected $clients;
    protected $db;

    public function __construct() {
        $this->db = new DB();
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
        $socketId = sprintf('%d.%d', random_int(1, 1000000000), random_int(1, 1000000000));
        $conn->socketId = $socketId;
        $conn->app = new \stdClass();
        $conn->app->id = 'my_app';
        $this->clients->attach($conn);
        echo "New connection! ({$conn->resourceId})\n";
        $sql = 'SELECT *
                FROM obj1_cmn';
        $conn->send('{"value_1": ' . json_encode($this->db::query($sql)->fetchAll(\PDO::FETCH_ASSOC)) . '}');
    }

    public function onMessage(ConnectionInterface $conn, $msg) {
        $sql = 'SELECT *
                FROM obj1_cmn';
        $data =  '{"value_1": '.  json_encode($this->db::query($sql)->fetchAll(\PDO::FETCH_ASSOC)) .'}';
        foreach ($this->clients as $client) {
            $client->send($data );
        }
    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}
