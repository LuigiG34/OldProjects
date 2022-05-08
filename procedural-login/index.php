<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>INDEX</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
include('html/navbar.php');
include('html/toast.php');
?>


<section class="p-5 mx-auto">
    <div id="bg" style="border: 1px rgba(255,255,255,.1) solid;border-radius: 25px;" class="container-lg shadow p-5 mx-auto w-50">
    	<div class="row">
           <?php include ("auth/session/session_open.php");?>
           <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non illum impedit cumque suscipit reprehenderit sint itaque quidem soluta natus, atque nemo amet officiis facere doloribus ipsam est quae! Voluptates, expedita! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, culpa magni. Eum accusamus earum, obcaecati necessitatibus hic doloremque architecto expedita reiciendis aut, dolores eaque beatae, fugiat a. Dicta, mollitia tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque saepe ipsum beatae natus culpa. Repellat voluptas nostrum libero autem, odit magni vitae ipsa quam, porro eveniet pariatur reiciendis sequi. Inventore?
           Voluptatem aperiam excepturi hic adipisci minus laudantium neque aut reprehenderit ipsum, perferendis rerum eveniet quas quo corrupti! Doloribus vel aperiam accusamus maxime magnam autem, aspernatur beatae incidunt harum possimus nesciunt.
           Illo maxime magnam, sint mollitia eos vitae quasi harum, eveniet sunt exercitationem totam aliquid animi! Quisquam obcaecati ipsum, inventore pariatur, non perferendis aspernatur recusandae nostrum iusto velit saepe praesentium molestias. <br>
           Vel numquam sunt sapiente cupiditate commodi sed quo eligendi quod, dolorem ad laudantium nemo ullam aperiam ratione architecto doloremque ea similique. Dicta animi ea, corrupti dignissimos illum facere blanditiis voluptate!</p>
        </div>
        <div class="row">
            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente cumque amet facere, voluptas aspernatur suscipit quod aliquam. Velit deleniti voluptates a, ipsa quas, sequi quae nisi in quis quasi eum.
            Harum asperiores dolor quo neque! Repellendus, voluptatum! Exercitationem ipsum animi natus modi eius corrupti molestiae odio veniam, minus, doloremque rerum accusamus accusantium praesentium error optio magnam enim iste dolore officiis.
            Perferendis, neque voluptate blanditiis cumque repellendus modi nihil mollitia aliquid, amet beatae asperiores molestiae, quisquam incidunt porro eius dolor cum totam deleniti exercitationem corporis rem odit voluptatem. Quos, a quae.</p>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
var toastElList = [].slice.call(document.querySelectorAll('.toast'))
var toastList = toastElList.map(function (toastEl) {
  return new bootstrap.Toast(toastEl, option)
})
</script>
</body>
</html>