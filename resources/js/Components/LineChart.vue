
<script>
import { defineComponent } from 'vue'
import { Line } from 'vue3-chart-v2'

export default defineComponent({
    name: 'MyappLinechart',
    extends: Line,

    props:{
        chartData:{
            type: Object,
            required: true
        },
        chartOptions:{
            type: Object,
            required: true
        },
        update:{
            type:Number
        }
    },

    mounted() {
        this.renderChart(this.chartData, this.chartOptions)
    },
    watch:{
       
        update: {
                 handle: function(){
                 this._chart.destroy();
                 this.renderChart(this.chartData, this.chartOptions)
            }
        }
    },

});
</script>