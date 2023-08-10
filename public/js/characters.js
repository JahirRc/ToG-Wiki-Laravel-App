function changeImage() {
    
    var a = "<?php echo $students[$imageValue]['title'] ?>";

    var title = document.getElementById("title");
    var name = document.getElementById("name");
    var element = document.getElementById("element");
    var classs = document.getElementById("classs");

    var rarity2 = document.getElementById("rarity2");
    var element2 = document.getElementById("element2");
    var classs2 = document.getElementById("classs2");
    var type2 = document.getElementById("type2");

    var history = document.getElementById("history");

    console.log(a);

    switch (a){

        case "The Boy Who Chases After Light":
            if(document.getElementById("The Boy Who Chases After Light").getAttribute("src") == "/images/2.png"){

                document.getElementById("The Boy Who Chases After Light").src = "/images/14.png";
                title.innerHTML = "<?php echo $students2['0']['title']; ?>";
                name.innerHTML = "<?php echo $students2['0']['name']; ?>";
        
            }else{

                document.getElementById("The Boy Who Chases After Light").src = "/images/2.png";
                title.innerHTML = "<?php echo $students[$imageValue]['title']; ?>";
                name.innerHTML = "<?php echo $students[$imageValue]['name']; ?>";
            }
        break;


        case "The Bloody Dawn of Civilization":
            if(document.getElementById("The Bloody Dawn of Civilization").getAttribute("src") == "/images/9.png"){

                document.getElementById("The Bloody Dawn of Civilization").src = "/images/16.png";
                title.innerHTML = "<?php echo $students2['1']['title']; ?>";
                name.innerHTML = "<?php echo $students2['1']['name']; ?>";
                element.src = "<?php echo $students2['1']['element']; ?>";
                classs.src = "<?php echo $students2['1']['class']; ?>";

                element2.src = "<?php echo $students2['1']['element']; ?>";
                classs2.src = "<?php echo $students2['1']['class']; ?>";

                console.log(history);
                history.innerHTML = '<h1>'+"<?php echo $students2['1']['history']; ?>"+'</h1>';
        
            }else{

                document.getElementById("The Bloody Dawn of Civilization").src = "/images/9.png";
                title.innerHTML = "<?php echo $students[$imageValue]['title']; ?>";
                name.innerHTML = "<?php echo $students[$imageValue]['name']; ?>";
                element.src = "<?php echo $students[$imageValue]['element']; ?>";
                classs.src = "<?php echo $students[$imageValue]['class']; ?>";

                element2.src = "<?php echo $students[$imageValue]['element']; ?>";
                classs2.src = "<?php echo $students[$imageValue]['class']; ?>";
            }
        break;

    }
    
    return 0;

}