const date=new Date();

const cal = () => {

    const currentmonthlastday=new Date(date.getFullYear(),date.getMonth()+1,0).getDate();
    const prevmonthlastday=new Date(date.getFullYear(),date.getMonth(),0).getDate();
    const currentmonthfirstdayindex=new Date(date.getFullYear(),date.getMonth(),1).getDay();
    const currentmonthlastdayindex=new Date(date.getFullYear(),date.getMonth(),1).getDay();
    
    
    const currentday=date.getDate();
    const currentmonth=date.getMonth()+1;
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
    const weeks=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
    
    document.querySelector(".date h1").innerHTML=months[date.getMonth()];
    document.querySelector(".date p").innerHTML=currentday +"-"+ currentmonth +"-"+ currentyear;
    // document.querySelector(".date p").innerHTML=date.toDateString();
    
    //for dynamic dates display
    const monthdays=document.querySelector(".days");
    let day="";

  

    





    //for previous months date ->space
    for(let i=1;i<=currentmonthlastday+currentmonthfirstdayindex;i++)
    {
        if(i>currentmonthfirstdayindex)
        {
            day+= `<div class="day"> ${i-currentmonthfirstdayindex} </div>`;
            // day+= `<div class="day" onclick="location.href='demo.html';"> ${i-currentmonthfirstdayindex} </div>`;
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
            let clickeddate=day.textContent.toString();
            let clickedmonth=date.getMonth()+1;
            clickedmonth=clickedmonth.toString();
            let clickedyear=date.getFullYear().toString();
            
           

            document.querySelector(".date p").innerHTML=clickeddate+"-"+clickedmonth+"-"+clickedyear;

            // console.log(clickeddate,clickedmonth,clickedyear);
            // window.location.href = "demo.html?clickeddate|clickedmonth|clickedyear";
            // var queryString = "?para1=" + clickeddate + "&para2=" + clickedmonth;
            // console.log(day.textContent,date.getMonth()+1);
        });
    });
    //C1 ends

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





 







