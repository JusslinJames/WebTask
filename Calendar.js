const date=new Date();




const cal = () => {

    const currentmonthlastday=new Date(date.getFullYear(),date.getMonth()+1,0).getDate();
    const prevmonthlastday=new Date(date.getFullYear(),date.getMonth(),0).getDate();
    const currentmonthfirstdayindex=new Date(date.getFullYear(),date.getMonth(),1).getDay();
    const currentmonthlastdayindex=new Date(date.getFullYear(),date.getMonth(),1).getDay();
    
    
const currentday=date.getDate();
var currentmonth=date.getMonth()+1;
if(currentmonth<10)
{
    currentmonth="0"+currentmonth;
}
const currentyear=date.getFullYear();

    
    
    const months=[
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];
    
    
    document.querySelector(".date h1").innerHTML=months[date.getMonth()];
    document.querySelector(".date p").innerHTML=currentday +" - "+ currentmonth +" - "+ currentyear;
        
    //for dynamic dates display
    const monthdays=document.querySelector(".days");
    let day="";

    //for previous months date ->space
    for(let i=1;i<=currentmonthlastday+currentmonthfirstdayindex;i++)
    {

        if(i>currentmonthfirstdayindex)
        {
            day+= `<div class="day" id="${i-currentmonthfirstdayindex}"> ${i-currentmonthfirstdayindex} </div>`;
            monthdays.innerHTML=day;
        }
        else
        {
            day+= `<div class="empty">  </div>`;
            monthdays.innerHTML=day;
        }  
    }
    


    //C1: code for geting the value of element clicked
    document.querySelectorAll(".days div").forEach
    (day=>{
        day.addEventListener("click",event=>{
            let clickeddate=day.textContent;
            var clickedmonth=date.getMonth()+1;
            if(clickedmonth<10)
            {
                clickedmonth="0"+clickedmonth;
            }
            clickedmonth=clickedmonth.toString();
            let clickedyear=date.getFullYear().toString();
            document.querySelector(".date p").innerHTML=clickeddate+" - "+clickedmonth+" - "+clickedyear;


        });
    });
    //C1 ends

   show1(currentmonth,currentyear);
   showevents(currentmonth,currentyear);
};







document.querySelector(".previous").addEventListener("click", () => {
    date.setMonth(date.getMonth() - 1);
    cal();
    
  });
  
  document.querySelector(".next").addEventListener("click", () => {
    date.setMonth(date.getMonth() + 1);
    cal ();
   
  });

  cal();








function show1(currentmonth,currentyear)
{
var monthdata=currentmonth;
var yeardata=currentyear;

$.ajax({
    type: "GET",
    url: 'fetchdata.php',
    data: {m: monthdata, y: yeardata},
    async : true,
    success: function(data){
        
var res = data.split(" ");

for(var i=0;i<res.length;i++)
{
    $("#"+res[i]).css("background-color", "yellow");
}

    }

});
}





  
function showevents(currentmonth1,currentyear1)
{
    var monthdata=currentmonth1;
    var yeardata=currentyear1;
    $.ajax({
    type: "GET",
    url: 'del.php',
    data: {m: monthdata, y: yeardata},
    async : true,
    success: function(response){
     $("#res").html(response); 
    }

    });
}
