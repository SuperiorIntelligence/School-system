var GoogleChartsDemo={init:function(){google.load("visualization","1",{packages:["corechart","bar","line"]}),google.setOnLoadCallback(function(){GoogleChartsDemo.runDemos()})},runDemos:function(){var e;!function(){var e=new google.visualization.DataTable;e.addColumn("timeofday","Time of Day"),e.addColumn("number","سطح انگیزه"),e.addColumn("number","سطح انرژی"),e.addRows([[{v:[8,0,0],f:"8 am"},1,.25],[{v:[9,0,0],f:"9 am"},2,.5],[{v:[10,0,0],f:"10 am"},3,1],[{v:[11,0,0],f:"11 am"},4,2.25],[{v:[12,0,0],f:"12 pm"},5,2.25],[{v:[13,0,0],f:"1 pm"},6,3],[{v:[14,0,0],f:"2 pm"},7,4],[{v:[15,0,0],f:"3 pm"},8,5.25],[{v:[16,0,0],f:"4 pm"},9,7.5],[{v:[17,0,0],f:"5 pm"},10,10]]);var a={title:"انگیزه و سطح انرژی در طول روز\n",focusTarget:"category",hAxis:{title:"زمان روز\n",format:"h:mm a",viewWindow:{min:[7,30,0],max:[17,30,0]}},vAxis:{title:"رتبه (مقیاس 1-10)"}};new google.visualization.ColumnChart(document.getElementById("m_gchart_1")).draw(e,a),new google.visualization.ColumnChart(document.getElementById("m_gchart_2")).draw(e,a)}(),(e=new google.visualization.DataTable).addColumn("number","روز"),e.addColumn("number",""),e.addColumn("number"," "),e.addColumn("number",""),e.addRows([[1,37.8,80.8,41.8],[2,30.9,69.5,32.4],[3,25.4,57,25.7],[4,11.7,18.8,10.5],[5,11.9,17.6,10.4],[6,8.8,13.6,7.7],[7,7.6,12.3,9.6],[8,12.3,29.2,10.6],[9,16.9,42.9,14.8],[10,12.8,30.9,11.6],[11,5.3,7.9,4.7],[12,6.6,8.4,5.2],[13,4.8,6.3,3.6],[14,4.2,6.2,3.4]]),new google.charts.Line(document.getElementById("m_gchart_5")).draw(e,{chart:{title:"درآمد صندوق دفتر در دو هفته اول افتتاحیه\n",subtitle:"میلیون دلار (USD)"}}),function(){var e=google.visualization.arrayToDataTable([["وظایف","ساعت در روز\n"],["کار",11],["خوردن",2],["رفت و آمد\n",2],["تماشای تلویزیون",2],["خوابیدن",7]]),a={title:"فعالیت های من در روز"};new google.visualization.PieChart(document.getElementById("m_gchart_3")).draw(e,a),a={pieHole:.4},new google.visualization.PieChart(document.getElementById("m_gchart_4")).draw(e,a)}()}};GoogleChartsDemo.init();