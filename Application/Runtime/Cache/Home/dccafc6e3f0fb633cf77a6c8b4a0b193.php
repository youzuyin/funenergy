<?php if (!defined('THINK_PATH')) exit();?><div class="main">
    <div id="chart-m" style=""></div>
    <div id="chart-l"></div>
    <div id="chart-r"></div>
    <div class="speed-wrap" align="center">
        <p>转速</p>
        <p class="speed-num">20</p>
    </div>
</div>
<div class="data-wrap">
    <p align="center">N#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>单体H</td>
            <td>3.3V</td>
            <td>单体L</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td>3.3V</td>
            <td>放电流</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>温度</td>
            <td>3.3V</td>
            <td>故障</td>
            <td>2.9V</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">太阳能发电系统</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td>3.3V</td>
            <td>电流</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>功率</td>
            <td>3.3V</td>
            <td>故障</td>
            <td>2.9V</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">柴油发电机</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>状态</td>
            <td>3.3V</td>
            <td>转速</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>电压</td>
            <td>3.3V</td>
            <td>电流</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>功率</td>
            <td>3.3V</td>
            <td>故障</td>
            <td>2.9V</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">防火系统</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>状态</td>
            <td class="my-bg-wx my-cl-white">正常</td>
            <td>报警</td>
            <td class="my-bg-danger my-cl-white">1</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">1#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">

        <tr>
            <td>电压</td>
            <td>3.3V</td>
            <td>电量</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td>3.3V</td>
            <td>单体L</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td>3.3V</td>
            <td>放电流</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>温度</td>
            <td>3.3V</td>
            <td>故障</td>
            <td>2.9V</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">2#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">

        <tr>
            <td>电压</td>
            <td>3.3V</td>
            <td>电量</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td>3.3V</td>
            <td>单体L</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td>3.3V</td>
            <td>放电流</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>温度</td>
            <td>3.3V</td>
            <td>故障</td>
            <td>2.9V</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">9#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">

        <tr>
            <td>电压</td>
            <td>3.3V</td>
            <td>电量</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td>3.3V</td>
            <td>单体L</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td>3.3V</td>
            <td>放电流</td>
            <td>2.9V</td>
        </tr>
        <tr>
            <td>温度</td>
            <td>3.3V</td>
            <td>故障</td>
            <td>2.9V</td>
        </tr>
    </table>
</div>
<script>
    var myChartM = echarts.init(document.getElementById('chart-m'));
    var myChartL = echarts.init(document.getElementById('chart-l'));
    var myChartR = echarts.init(document.getElementById('chart-r'));
    optionM = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                restore : {show: false},
                saveAsImage : {show: false}
            }
        },
        series : [
            {
                name:'业务指标',
                type:'gauge',
                splitNumber: 11, // 分割段数，默认为5
                max:220,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.2, '#228b22'],[0.8, '#48b'],[1, '#ff4500']],
                        width: 8
                    }
                },
                axisTick: {            // 坐标轴小标记
                    splitNumber: 10,   // 每份split细分多少段
                    length :12,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto'
                    }
                },
                axisLabel: {           // 坐标轴文本标签，详见axis.axisLabel
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto'
                    }
                },
                splitLine: {           // 分隔线
                    show: true,        // 默认显示，属性show控制显示与否
                    length :30,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto'
                    }
                },
                pointer : {
                    width : 5
                },
                title : {
                    show : true,
                    offsetCenter: [0, '-40%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                detail : {
                    formatter:'航速:{value}',
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontWeight: 'bolder',
                        fontSize: 12
                    }
                },
                data:[{value: 50 }]
            }
        ]
    };
    optionL = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                restore : {show: false},
                saveAsImage : {show: false}
            }
        },
        series : [
            {
                name:'电压',
                type:'gauge',
                splitNumber: 4, // 分割段数，默认为5
                max:220,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.2, '#228b22'],[0.8, '#48b'],[1, '#ff4500']],
                        width: 8
                    }
                },
                axisTick: {            // 坐标轴小标记
                    splitNumber: 10,   // 每份split细分多少段
                    length :12,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto'
                    }
                },
                axisLabel: {           // 坐标轴文本标签，详见axis.axisLabel
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto'
                    }
                },
                splitLine: {           // 分隔线
                    show: true,        // 默认显示，属性show控制显示与否
                    length :30,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto'
                    }
                },
                pointer : {
                    width : 5
                },
                title : {
                    show : true,
                    offsetCenter: [0, '-40%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                detail : {
                    formatter:'{value}',
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontWeight: 'bolder',
                        fontSize: 12
                    }
                },
                data:[{value: 220, name:'电压'}]
            }
        ]
    };
    optionR = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                restore : {show: false},
                saveAsImage : {show: false}
            }
        },
        series : [
            {
                name:'业务指标',
                type:'gauge',
                splitNumber: 4, // 分割段数，默认为5
                max:100,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.2, '#228b22'],[0.8, '#48b'],[1, '#ff4500']],
                        width: 8
                    }
                },
                axisTick: {            // 坐标轴小标记
                    splitNumber: 10,   // 每份split细分多少段
                    length :12,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto'
                    }
                },
                axisLabel: {           // 坐标轴文本标签，详见axis.axisLabel
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto'
                    }
                },
                splitLine: {           // 分隔线
                    show: true,        // 默认显示，属性show控制显示与否
                    length :30,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto'
                    }
                },
                pointer : {
                    width : 5
                },
                title : {
                    show : true,
                    offsetCenter: [0, '-40%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                detail : {
                    formatter:'{value}%',
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontWeight: 'bolder',
                        fontSize: 12
                    }
                },
                data:[{value: 50,name:'电量' }]
            }
        ]
    };
    myChartM.setOption(optionM);
    myChartL.setOption(optionL);
    myChartR.setOption(optionR);
</script>