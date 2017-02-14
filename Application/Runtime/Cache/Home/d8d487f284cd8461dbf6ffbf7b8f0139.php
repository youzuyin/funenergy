<?php if (!defined('THINK_PATH')) exit();?><div class="main">
    <div id="chart-m" style=""></div>
    <div id="chart-l"></div>
    <div id="chart-r"></div>
    <div class="speed-wrap" align="center">
        <p>转速</p>
        <p class="speed-num"><?php echo countone($sdata[104].$sdata[105]);?></p>
    </div>
</div>
<div class="data-wrap">
    <p align="center">N#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>单体H</td>
            <td>0V</td>
            <td>单体L</td>
            <td>0V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td>0A</td>
            <td>放电流</td>
            <td>0A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td>0℃</td>
            <td>故障</td>
            <td>0</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">太阳能发电系统</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[120].$sdata[121]);?>V</td>
            <td>电流</td>
            <td><?php echo countten($sdata[122].$sdata[123]);?>V</td>
        </tr>
        <tr>
            <td>功率</td>
            <td>5KW</td>
            <td>故障</td>
            <td>0</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">柴油发电机</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>状态</td>
            <td>启动</td>
            <td>转速</td>
            <td>8R/M</td>
        </tr>
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[133].$sdata[134]);?>V</td>
            <td>电流</td>
            <td>10A</td>
        </tr>
        <tr>
            <td>功率</td>
            <td>8KW</td>
            <td>频率</td>
            <td><?php echo (hexdec($sdata[135])); ?>HZ</td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">防火系统</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>状态</td>
            <td <?php if($sdata[132] == 0): ?>class="my-bg-wx my-cl-white"<?php endif; ?> >正常</td>
            <td <?php if($sdata[132] == 1): ?>class="my-bg-danger my-cl-white"<?php endif; ?> >报警</td>
            <td class="my-bg-danger my-cl-white"><?php echo (hexdec($sdata[132])); ?></td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">1#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">

        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[4].$sdata[5]);?>V</td>
            <td>电量</td>
            <td><?php echo (hexdec($sdata[14])); ?>%</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td><?php echo countten($sdata[6].$sdata[7]);?>V</td>
            <td>单体L</td>
            <td><?php echo countten($sdata[8].$sdata[9]);?>V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td><?php echo countminus1($sdata[10].$sdata[11]);?>A</td>
            <td>放电流</td>
            <td><?php echo countminus2($sdata[10].$sdata[11]);?>A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td><?php echo (hexdec($sdata[14])); ?>℃</td>
            <td>故障</td>
            <td><?php echo (hexdec($sdata[15])); ?></td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">2#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[16].$sdata[17]);?>V</td>
            <td>电量</td>
            <td><?php echo (hexdec($sdata[26])); ?>%</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td><?php echo countten($sdata[18].$sdata[19]);?>V</td>
            <td>单体L</td>
            <td><?php echo countten($sdata[20].$sdata[21]);?>V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td><?php echo countminus1($sdata[22].$sdata[23]);?>A</td>
            <td>放电流</td>
            <td><?php echo countminus2($sdata[22].$sdata[23]);?>A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td><?php echo (hexdec($sdata[24])); ?>℃</td>
            <td>故障</td>
            <td><?php echo (hexdec($sdata[27])); ?></td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">3#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[28].$sdata[29]);?>V</td>
            <td>电量</td>
            <td><?php echo (hexdec($sdata[38])); ?>%</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td><?php echo countten($sdata[30].$sdata[31]);?>V</td>
            <td>单体L</td>
            <td><?php echo countten($sdata[32].$sdata[33]);?>V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td><?php echo countminus1($sdata[34].$sdata[35]);?>A</td>
            <td>放电流</td>
            <td><?php echo countminus2($sdata[34].$sdata[35]);?>A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td><?php echo (hexdec($sdata[36])); ?>℃</td>
            <td>故障</td>
            <td><?php echo (hexdec($sdata[39])); ?></td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">4#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[40].$sdata[41]);?>V</td>
            <td>电量</td>
            <td><?php echo (hexdec($sdata[50])); ?>%</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td><?php echo countten($sdata[42].$sdata[43]);?>V</td>
            <td>单体L</td>
            <td><?php echo countten($sdata[44].$sdata[45]);?>V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td><?php echo countminus1($sdata[46].$sdata[47]);?>A</td>
            <td>放电流</td>
            <td><?php echo countminus2($sdata[46].$sdata[47]);?>A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td><?php echo (hexdec($sdata[48])); ?>℃</td>
            <td>故障</td>
            <td><?php echo (hexdec($sdata[51])); ?></td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">5#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[52].$sdata[53]);?>V</td>
            <td>电量</td>
            <td><?php echo (hexdec($sdata[62])); ?>%</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td><?php echo countten($sdata[54].$sdata[55]);?>V</td>
            <td>单体L</td>
            <td><?php echo countten($sdata[56].$sdata[57]);?>V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td><?php echo countminus1($sdata[58].$sdata[59]);?>A</td>
            <td>放电流</td>
            <td><?php echo countminus2($sdata[58].$sdata[59]);?>A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td><?php echo (hexdec($sdata[60])); ?>℃</td>
            <td>故障</td>
            <td><?php echo (hexdec($sdata[63])); ?></td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">6#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[64].$sdata[65]);?>V</td>
            <td>电量</td>
            <td><?php echo (hexdec($sdata[74])); ?>%</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td><?php echo countten($sdata[66].$sdata[67]);?>V</td>
            <td>单体L</td>
            <td><?php echo countten($sdata[68].$sdata[69]);?>V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td><?php echo countminus1($sdata[70].$sdata[71]);?>A</td>
            <td>放电流</td>
            <td><?php echo countminus2($sdata[70].$sdata[71]);?>A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td><?php echo (hexdec($sdata[72])); ?>℃</td>
            <td>故障</td>
            <td><?php echo (hexdec($sdata[75])); ?></td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">7#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[76].$sdata[77]);?>V</td>
            <td>电量</td>
            <td><?php echo (hexdec($sdata[86])); ?>%</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td><?php echo countten($sdata[78].$sdata[79]);?>V</td>
            <td>单体L</td>
            <td><?php echo countten($sdata[80].$sdata[81]);?>V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td><?php echo countminus1($sdata[82].$sdata[83]);?>A</td>
            <td>放电流</td>
            <td><?php echo countminus2($sdata[82].$sdata[83]);?>A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td><?php echo (hexdec($sdata[84])); ?>℃</td>
            <td>故障</td>
            <td><?php echo (hexdec($sdata[87])); ?></td>
        </tr>
    </table>
</div>
<div class="data-wrap">
    <p align="center">8#锂电池信息</p>
    <table class="my-width-100 data-tab my-margin-t5">
        <tr>
            <td>电压</td>
            <td><?php echo countten($sdata[88].$sdata[89]);?>V</td>
            <td>电量</td>
            <td><?php echo (hexdec($sdata[98])); ?>%</td>
        </tr>
        <tr>
            <td>单体H</td>
            <td><?php echo countten($sdata[90].$sdata[91]);?>V</td>
            <td>单体L</td>
            <td><?php echo countten($sdata[92].$sdata[93]);?>V</td>
        </tr>
        <tr>
            <td>充电流</td>
            <td><?php echo countminus1($sdata[94].$sdata[95]);?>A</td>
            <td>放电流</td>
            <td><?php echo countminus2($sdata[94].$sdata[95]);?>A</td>
        </tr>
        <tr>
            <td>温度</td>
            <td><?php echo (hexdec($sdata[96])); ?>℃</td>
            <td>故障</td>
            <td><?php echo (hexdec($sdata[99])); ?></td>
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
                data:[{value: "<?php echo countone($sdata[104].$sdata[105]);?>" }]
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
                    formatter:'{value}V',
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontWeight: 'bolder',
                        fontSize: 12
                    }
                },
                data:[{value: "<?php echo countten($sdata[102].$sdata[103]);?>", name:'电压'}]
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
                    formatter:'{value}A',
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontWeight: 'bolder',
                        fontSize: 12
                    }
                },
                data:[{value:"<?php echo countten($sdata[100].$sdata[101]);?>",name:'电流' }]
            }
        ]
    };
    myChartM.setOption(optionM);
    myChartL.setOption(optionL);
    myChartR.setOption(optionR);
</script>