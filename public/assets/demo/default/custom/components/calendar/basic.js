var CalendarBasic={init:function(){var e=moment().startOf("day"),t=e.format("YYYY-MM"),i=e.clone().subtract(1,"day").format("YYYY-MM-DD"),n=e.format("YYYY-MM-DD"),r=e.clone().add(1,"day").format("YYYY-MM-DD");$("#m_calendar").fullCalendar({isRTL:mUtil.isRTL(),header:{left:"prev,next today",center:"title",right:"month,agendaWeek,agendaDay,listWeek"},editable:!0,eventLimit:!0,navLinks:!0,events:[{title:"رویداد یک روز کامل\n",start:t+"-01",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ",className:"m-fc-event--danger m-fc-event--solid-warning"},{title:"گزارش\n",start:t+"-14T13:30:00",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ",end:t+"-14",className:"m-fc-event--accent"},{title:"شرکت اکسین صنعت\n",start:t+"-02",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ",end:t+"-03",className:"m-fc-event--primary"},{title:"محصول \n",start:t+"-03",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ",end:t+"-05",className:"m-fc-event--light m-fc-event--solid-primary"},{title:"شام\n",start:t+"-12",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ",end:t+"-10"},{id:999,title:"تکرار رویداد\n",start:t+"-09T16:00:00",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ",className:"m-fc-event--danger"},{id:1e3,title:"تکرار رویداد\n",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ",start:t+"-16T16:00:00"},{title:"کنفرانس",start:i,end:r,description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ",className:"m-fc-event--accent"},{title:"ملاقات\n",start:n+"T10:30:00",end:n+"T12:30:00",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"},{title:"ناهار\n",start:n+"T12:00:00",className:"m-fc-event--info",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"},{title:"ملاقات\n",start:n+"T14:30:00",className:"m-fc-event--warning",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"},{title:"ساعت تفریح\n",start:n+"T17:30:00",className:"m-fc-event--metal",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"},{title:"شام\n",start:n+"T20:00:00",className:"m-fc-event--solid-focus m-fc-event--light",description:"لورم ایپسوم متن ساختگی"},{title:"جشن تولد\n",start:r+"T07:00:00",className:"m-fc-event--primary",description:"رفتن به گوگل\n"},{title:"رفتن به گوگل",url:"http://google.com/",start:t+"-28",className:"m-fc-event--solid-info m-fc-event--light",description:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"}],eventRender:function(e,t){t.hasClass("fc-day-grid-event")?(t.data("content",e.description),t.data("placement","top"),mApp.initPopover(t)):t.hasClass("fc-time-grid-event")?t.find(".fc-title").append('<div class="fc-description">'+e.description+"</div>"):0!==t.find(".fc-list-item-title").lenght&&t.find(".fc-list-item-title").append('<div class="fc-description">'+e.description+"</div>")}})}};jQuery(document).ready(function(){CalendarBasic.init()});