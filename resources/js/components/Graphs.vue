<template>
    <div id="all_graph" className="card-body">

        <select id="count_points" className="align-items-right">
            <option value="6">6</option>
            <option selected="selected" value="24">24</option>
            <option value="60">60</option>
        </select>
        <div class="container-fluid">
            <div class="row">
                <div id="chart"></div>
            </div>
        </div>
    </div>
</template>

<script>

// import VueApexCharts from "vue3-apexcharts";

export default {
    // components: {
    //     apexchart: VueApexCharts,
    // },
    mounted() {

        let _dataset_apex_arr = [], _categoriesArr = []

        function setApexChart(graphs, count_points_selected, skip_value = []) {
            // сколько штук выводить обработчик фильтра id="count_points" ( перенести на бэк)
            // не работает
            console.log('count_points_selected: ', count_points_selected)
            let dataset_apex_arr = [];
            let list_labels = new Set;
            for (const [key, value] of Object.entries(graphs)) {

                let list_current = [];
                let slice_value = value.slice(-(count_points_selected))

                if (skip_value.length > 0 && (skip_value.indexOf(key) !== -1)) {
                } else {

                    for (const [key, el] of Object.entries(slice_value)) {
                        list_labels.add(el.date);
                        list_current.push(el.value);
                    }

                    dataset_apex_arr.push({
                        name: key,
                        data: list_current,
                    })
                }

            }
            return [dataset_apex_arr, list_labels]
        }

        var options = {
            series: [],
            chart: {
                height: 550,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: true
                }
            },
            colors: ['#77B6EA', '#545454', '#F44336', '#E91E63', '#9C27B0', '#98CE00', '#16E0BD', '#78C3FB', '#89A6FB', '#98838F'],
            dataLabels: {
                enabled: true,
            },
            xaxis: {
                categories: []
            },

            stroke: {
                show: true,
                curve: 'smooth',
                lineCap: 'butt',
                colors: undefined,
                width: 1,
                dashArray: 0,
            }

        }

        function updateApexChart(dataset_apex_arr, list_labels) {
            //???
            let categoriesArr = [];
            var chart = new ApexCharts(document.querySelector("#chart"), options);

            chart.render();
            categoriesArr.push(...list_labels);
            chart.updateOptions({
                series: dataset_apex_arr,
                xaxis: {
                    categories: categoriesArr
                }
            })
        }

        let i;

        function getDataAllGraph(graphs, current_values, value_x, number_missing_values) {
            // Логика формирования объекта (вынести в бэк)
            for (const [key, value] of Object.entries(current_values)) {
                i = 0;
                let date;
                for (const [key, el] of Object.entries(value)) {
                    if (key === value_x) {
                        date = el;
                    }
                    if (i >= number_missing_values) {
                        if (graphs[key]) {
                            graphs[key] = [...Array.from(graphs[key]), {"date": date, "value": el}];
                        } else {
                            graphs[key] = [{"date": date, "value": el}];
                        }
                    }

                    i++;

                }
            }
            return graphs;
        }

        let global_values = [];
        let global_count_points_selected;

        function get_data(data) {
            var djangoData = JSON.parse(data);
            return djangoData.value_1;
        }


        //  Установить непрерывное соединение с сервером для получения данных графика
        const socket_graph =
            new WebSocket(`ws://${process.env.MIX_PUSHER_HOST}:${process.env.MIX_PUSHER_PORT}/ws/graphs/`);
        socket_graph.onmessage = function (e) {
            let out = get_data(e.data);
            _dataset_apex_arr = out['series'];
            _categoriesArr = out['categories'];
            console.log('_dataset_apex_arr: ', _dataset_apex_arr);
            console.log('_categoriesArr: ', _categoriesArr);
            let chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
            chart.updateOptions({
                series: _dataset_apex_arr,
                xaxis: {
                    categories: _categoriesArr
                }
            })
        }

        document.getElementById('count_points').onchange = function (event) {
            socket_graph.send(event.target.value);
        }

        // socket_graph.onmessage = function (e) {
        //     // Обработчик события  (Jquery)
        //     let graphs = {};
        //     let current_values = get_data(e.data);
        //     // выбранные датчики
        //     let count_points_selected = $( "#count_points option:selected" ).text();
        //     if (_.isEqual(current_values, window.global_values) === false ||
        //         _.isEqual(count_points_selected, window.global_count_points_selected) === false){
        //         window.global_values = current_values;
        //         window.global_count_points_selected = count_points_selected;
        //
        //         // получить данные
        //         graphs = getDataAllGraph(graphs, current_values, "date", 5);
        //
        //         const [dataset_apex_arr, list_labels] = setApexChart(graphs,count_points_selected)
        //
        //         updateApexChart(dataset_apex_arr,list_labels);
        //     }
        // }
    }
}
</script>

<style scoped>

</style>
