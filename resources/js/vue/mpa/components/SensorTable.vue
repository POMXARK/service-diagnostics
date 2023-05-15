<template>
    <DataTable id="table_sensor" class="display nowrap table table-hover" style="width:100%">
        <thead>
        <tr id="table_fields_names">
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

export default {
    components: {
        DataTable
    },
}
</script>

<style scoped>

</style>
