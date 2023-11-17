<?php
/*
Template Name: Stack
*/
get_header('new');  ?>
<style>
    .container {
        padding-top: 100vh;
        display: flex;
    }

    .cards {
        margin-left: 100px;
    }

    .card {
        height: 200px;
        width: 400px;
        margin-bottom: 50px;
        background: white;
        font-size: 36px;

        &:first-child {
            box-shadow: 0 0 30px 3px rgba(0, 0, 0, 0.05);
        }
    }

    .container2 {
        padding-top: 40px;
        width: 100%;
        height: 150vh;
        border-top: 1px solid red;
    }
</style>


    <div >

        <h1>Stacking Cards</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat mi nisl quis eros. Integer ornare libero quis risus fermentum consequat. Mauris pharetra odio sagittis, vulputate magna at, lobortis nulla. Proin efficitur, nisi vel finibus elementum, orci sem volutpat eros, eget ultrices velit mi sagittis massa. Vestibulum sagittis ullamcorper cursus. Ut turpis dolor, tempor ut tellus et, sodales ultricies elit. Ut pharetra tristique est ac dictum. Integer ac consectetur purus, vehicula efficitur urna. Donec ultrices accumsan ipsum vitae faucibus. Quisque malesuada ex nisi, a bibendum erat commodo in. Pellentesque suscipit varius gravida. Nam scelerisque est sit amet laoreet pharetra. Vivamus quis ligula sed lacus mattis mollis. Vivamus facilisis orci rutrum nulla porta dignissim. Fusce fermentum id nibh laoreet volutpat. Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erat ut odio. Integer malesuada hendrerit purus ullamcorper molestie. Fusce imperdiet orci vitae purus suscipit rutrum..
        </p>
        <div class='container' style="margin-top: 100px">
            <div class='cards'>
                <div class='card' style='top:40px'>1</div>
                <div class='card' style='top:45px'>2</div>
                <div class='card' style='top:50px'>3</div>
                <div class='card' style='top:55px'>4</div>
                <div class='card' style='top:60px'>5</div>
            </div>
        </div>
        <div class='container2'>
        </div>
    </div>




<?php get_footer('new'); ?>