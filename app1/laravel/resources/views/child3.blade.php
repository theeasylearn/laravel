@component("header")
@endcomponent
@component('menu')
@endcomponent
<div class="container">
    @component('pageheading')
    Home
    @slot("color")
    text-primary
    @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae minima sequi libero provident rerum dicta asperiores. Iusto possimus id deserunt ex esse aliquam tenetur eum animi, voluptatum nihil numquam ut cum impedit nostrum eveniet sint iste optio distinctio nobis incidunt consequuntur vero rerum! Eum ducimus, eius exercitationem, hic obcaecati ullam eligendi ea dolorem repellendus ratione, ipsa velit fugit non alias reprehenderit qui mollitia voluptate assumenda. Vero mollitia repellendus corrupti beatae eos sint veniam neque itaque odit distinctio, provident unde consectetur, non excepturi! Iste impedit cupiditate aspernatur distinctio aut, fuga non facere odit blanditiis magni recusandae quam quas provident. Ratione, earum!</p>

        </div>
    </div>
</div>
@component('footer')
@endcomponent