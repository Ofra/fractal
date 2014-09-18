<?php
  include 'header.php';
?>
  
<body>
  <section class="accordion">
    <h1>Accordion with HTML5, CSS3 and jQuery</h1>
    <article>
      <h2>Lorem ipsum dolor</h2>
      <div class="block">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, omnis, quos, quaerat sit ab doloribus autem minima neque vitae minus iusto vel harum impedit optio ratione quod dignissimos necessitatibus tempora suscipit porro. Eum, fugiat, eligendi, pariatur molestiae consequatur voluptate ipsa dolor debitis iste dicta rerum ullam est dolorem ipsam voluptates.</p>  
      </div>
    </article>
    <article>
      <h2>Voluptatem ullam</h2>
      <div class="block">
        <p>Consequuntur, quo, distinctio, assumenda fugiat placeat corporis accusamus culpa cupiditate ratione deserunt explicabo autem recusandae totam aspernatur iste voluptatibus ab aliquid atque fuga ex temporibus optio officia deleniti cum maiores nam exercitationem neque facilis molestiae ducimus. Voluptatem ullam quas eveniet eum aut!</p>  
      </div>
    </article>
    <article>
      <h2>Laborum aperiam</h2>
      <div class="block">
        <p>Commodi, dignissimos, blanditiis, consequuntur, at ullam porro mollitia nisi neque iste quisquam cupiditate perferendis voluptatem ab hic earum nam eveniet? Sunt, laborum aperiam quae aliquam dolore doloribus iure possimus est sit nihil voluptate similique quibusdam explicabo aut ab earum non cum repellendus.</p>  
      </div>
    </article>
  </section>
</body>
<script>
  
  $(function(){
   $('.block').hide();
   $('.accordion h2').on('click',function(){
     if($(this).next().is(':visible')){
       $(this).next().slideUp();
     }
     if($(this).next().is(':hidden')){
       $('.accordion h2').next().slideUp();
       $(this).next().slideDown();
    }
   });
 });

</script>