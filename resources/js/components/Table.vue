<template>
    <DataTable id="table_id" class="display nowrap table table-hover" style="width:100%">
        <thead>
        <tr id="table_fields_names">E
            <td>id</td>
            <td>idobj</td>
            <td>idai</td>
            <td>datein</td>
            <td>mode</td>
            <td>aimax</td>
            <td>aimean</td>
            <td>aimin</td>
            <td>statmin</td>
            <td>statmax</td>
            <td>mlmin</td>
            <td>mlmax</td>
            <td>err</td>
            <td>sts</td>
            <td>dateout</td>
            <td>datecheck</td>
            <td>cmnt</td>
            <td>action</td>
        </tr>
        </thead>

        <tbody>

        </tbody>
    </DataTable>
</template>

<script>

import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net-bs5';
import language from 'datatables.net-plugins/i18n/ru.mjs';
import 'datatables.net-responsive';
// import 'datatables.net-select-bs5';
// import 'datatables.net-rowreorder-bs5';

DataTable.use(DataTablesCore);


export default {
    components: {
        DataTable
    },
    mounted() {

        function get_data(data) {
            let djangoData = JSON.parse(data);
            return djangoData.value_1;
        }

        // Установить непрерывное соединение с сервером для получения данных таблицы
        const socket_table =
            new WebSocket(`ws://${process.env.MIX_PUSHER_HOST}:${process.env.MIX_PUSHER_PORT}/ws/table/`);

        socket_table.onmessage = function (e) {

            $('#table_id').DataTable({
                    "order": [[0, 'desc']],
                    "iDisplayLength": 10,
                    "pageLength": 10,
                    destroy: true,
                    language,
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true,
                    data: get_data(e.data),
                    "columnDefs": [{
                        "targets": -1,
                        "data": null,
                        render: function (data, type, row) {
                            return '<button type="button" class=" change_sts_new btn btn-primary btn-block" data-row-id="' + row[0] + '">квитировать</button>';
                        },
                    },]
                }
            );
        }

        // обработчик нажатия кнопки "квитировать"
        $('#table_id').on('click', 'button', function () {
            let id = $(this).data("row-id");
            $.ajax({
                url: `/confirm/${id}/`,
                type: 'get',
            }).done( function() {
                socket_table.send(`/confirm/${id}/`);
                console.log('send');
            })
        });
    }

}
</script>

<style lang="scss" scoped>
// Datatables BS5
@import "~datatables.net-bs5/css/dataTables.bootstrap5.css";
@import "~datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css";
</style>
