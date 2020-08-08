Уязвимость ликвидировалась в Blog в файле /logic/add_post.php 
                            c помощью фунции function getNakedInput($input)

В общем она выглядит function getNakedInput($input){
                        return htmlentities(trim($input));
                     }                          
htmlentities(trim($input)) - убирает уязвимость