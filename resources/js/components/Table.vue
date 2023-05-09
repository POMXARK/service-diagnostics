<template>
    <DataTable id="table_id" class="display nowrap table table-hover" style="width:100%">
        <thead >
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
    created() {

        let countElOut;
        let changesFound;

        function get_data(data) {
            let djangoData = JSON.parse(data);
            return djangoData.value_1;
            // фейковая проверка доступа и вывод конкретно своих показателей
            //let djangoData = JSON.parse(data);

            // if ("{{ user.get_username }}" === "Cm001") {
            //     current_values = djangoData.value_1;
            // }
            //
            // if ("{{ user.get_username }}" === "Cm002") {
            //     current_values = djangoData.value_2;
            // }

            //return current_values;
        }

        // Установить непрерывное соединение с сервером для получения данных таблицы
        const socket_table = new WebSocket(`ws://${process.env.MIX_PUSHER_HOST}:${process.env.MIX_PUSHER_PORT}/ws/table/`);
        socket_table.onmessage = function (e) {
            console.log('socket_table.onmessage')
            let current_values = get_data(e.data);
            updateTable('#table_id', current_values);
        }

        function updateTableSts() {
            //$('#table_id').on('click', 'button', function () {
                changesFound = true;
                let parentObj = $(this).closest("tr");
                let values = parentObj.find('td');
                console.log("values: " + values);


                let id = values[0].textContent;
                let table_fields_names = $("#table_fields_names").find('td')
                console.log(table_fields_names.length);

                let i = 0

                let global_set = [];
                for (const [key, value] of Object.entries(values)) {
                    let new_set = {};
                    if (i < table_fields_names.length){
                        if (table_fields_names[i].textContent === "sts"){
                            new_set[table_fields_names[i].textContent] = changeSts(value.textContent);
                        }else {
                            new_set[table_fields_names[i].textContent] = value.textContent;
                        }
                        global_set.push(new_set);
                        i++;
                    }

                }

                let merge_dataset = Object.assign(...global_set);
                console.log(merge_dataset);

                function changeSts(sts) {
                    if (sts === '1') {
                        sts = '2'
                    } else {
                        sts = '1'
                    }
                    return sts
                }


                let current_url;

                if ("{{ user.get_username }}" === "Cm001") {
                    console.log("target");
                    current_url = `/api/tables-1/${id}/`

                }
                if ("{{ user.get_username }}" === "Cm002") {
                    current_url = `/api/tables-2/${id}/`
                }
                console.log(merge_dataset);
                $.ajax({
                    url: current_url,
                    type: 'PUT',
                    headers: {"X-CSRFToken": "{{ csrf_token }}"},
                    data: JSON.stringify(merge_dataset),
                    contentType: "application/json",
                    success: function (result) {
                        // Do something with the result
                    },
                });

            //});
        }

        function updateTable(tableId,current_values, set_filter = 0) {

            let out = [];
            let columns_names;
            for (const [key, value] of Object.entries(current_values)) {


                if (value.err > 0 && value.sts === 1){
                    let news = [];
                    if (set_filter > 0 && set_filter == value.idai) {
                        for (const [key, field_model] of Object.entries(value)){
                            news.push(field_model);
                        }
                        out.push(news);
                    }
                    if (set_filter === 0  ){
                        for (const [key, field_model] of Object.entries(value)){
                            news.push(field_model);
                        }
                        out.push(news);

                    }
                }

            }
            // когда нажата кнопка в таблице
            //updateTableSts();

            if (out.length !== countElOut || changesFound) {

                changesFound = false;
                countElOut = out.length;
                $('#table_id').DataTable({
                        "order": [[ 0, 'desc' ]],
                        "pageLength": 20,
                        //lengthMenu: [10, 20, 50, 100, 200, 500],
                        destroy: true,
                        language,
                        rowReorder: {
                            selector: 'td:nth-child(2)'
                        },
                        responsive: true,
                        data: out,
                        "columnDefs": [{
                            "targets": -1,
                            "data": null,
                            "defaultContent": '<button type="button" class=" change_sts_new btn btn-primary btn-block">квитировать</button>'
                        },]
                    }
                );

            }

        }
    }
}
</script>

<style lang="scss" scoped>
    // Datatables BS5
    @import "~datatables.net-bs5/css/dataTables.bootstrap5.css";
    @import "~datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css";
</style>
