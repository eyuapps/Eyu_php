let mydep = $(".deplist");  
console.log(mydep);        
console.log($("h1").text());

$("h1").text("This is the list of departments") 

$("li").first().css("background-color", "green")
$("li").last().css("background-color", "green") 



$("ul").prepend("<li>Data Science</li>")
$("ul").append("<li>Information System</li>") 

$("li").even().css("background-color", "yellow")
$("li").odd().css("background-color", "purple") 


$("li").mouseover(function () {
    console.log($(this).text())
    $(this).css("background-color", "white")
    }) 

    $("li").mouseout(function () {
        $("li").even().css("background-color", "yellow")
        $("li").odd().css("background-color", "purple")
        }) 