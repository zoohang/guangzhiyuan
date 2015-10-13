function getdate(){
    var myDate = new Date();
    myDate.getHours(); //获取当前小时数(0-23)
    myDate.getMinutes(); //获取当前分钟数(0-59)
    var zd_datetime=document.getElementById('zd_datetime');
    var y=myDate.getFullYear();
    var mh=myDate.getMonth();
    var r=myDate.getDate();
    var h=myDate.getHours();
    var m=myDate.getMinutes();
    var s=myDate.getSeconds();
    if(mh+1<10){
        mh='0'+(mh+1);
    }
    if(r<10){
        r='0'+r;
    }
    if(h<10){
        h='0'+h;
    }
    if(m<10){
        m='0'+m;
    }
    if(s<10){
        s='0'+s;
    }
    zd_datetime.innerHTML=(y+"-"+mh+"-"+r+" "+h+":"+m+":"+s);
    setTimeout(getdate,1000);
}