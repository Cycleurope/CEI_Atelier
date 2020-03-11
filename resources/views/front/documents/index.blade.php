@extends('layouts.front')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-3">
            <h1>Documents</h1>
        </div>
    </div>
    <div id="documents-grid" class="row">
    <div class="grid-sizer col-md-6 col-lg-4"></div>
        @foreach($brands as $brand)
        <div class="grid-item col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $brand->name }}</h3>
                    <ul class="list-group">
                    @foreach($brand->documents as $doc)
                        <li class="list-group-item"><a href="{{ $doc->getFirstMediaUrl('documents') }}" download>{{ $doc->title }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        <div class="grid-item col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores soluta quas quidem sunt incidunt eos, magnam amet nisi quod voluptatibus. Nemo veniam expedita, cum natus corporis ea, amet in temporibus sit distinctio laboriosam sint, harum culpa quam quos unde asperiores reprehenderit dolores dolorum placeat non nostrum alias necessitatibus magni! Est numquam voluptatibus recusandae excepturi nesciunt, amet beatae aperiam unde expedita repudiandae soluta error tempora laboriosam facere autem! Nam neque impedit, molestiae tenetur laboriosam minus exercitationem? Odio saepe nesciunt in sed, alias vitae nemo recusandae cupiditate molestiae officiis, provident adipisci asperiores temporibus ut, perspiciatis quibusdam reprehenderit quo molestias. Illum quaerat sed sapiente quasi maxime similique totam quibusdam. Quos officia aliquam impedit molestiae aperiam. Qui tempora ipsum vel itaque in est corporis!
                </div>
            </div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit voluptatum animi, facere dolores repellat qui! Amet a facere ab. Neque minima, voluptatum tempora veniam vitae laborum amet ex alias repellat, aperiam impedit repellendus corrupti quisquam. Impedit deserunt nihil fuga laudantium, asperiores consectetur corrupti ratione voluptatem voluptate, tempora itaque quis eaque dolorum pariatur. Incidunt corporis, odio, nisi molestias eveniet consequatur obcaecati soluta porro corrupti non blanditiis, voluptates mollitia illum quidem.
                </div>
            </div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi fuga praesentium quaerat, aut magnam, cumque aliquam non, architecto iusto voluptas nisi molestiae laudantium dolores. Ipsam voluptatum neque molestiae nulla distinctio maiores soluta provident, consequuntur facilis eos doloremque sapiente repudiandae minus.
                </div>
            </div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sed et adipisci voluptate facilis sapiente numquam repellendus eligendi aspernatur quas minima cumque quos, repellat architecto placeat voluptas, impedit veritatis, dolores praesentium autem quisquam ullam. Totam saepe quod blanditiis veritatis eaque fugit tempora consequatur, et maiores quasi soluta! Amet nostrum nam provident quam perferendis cum eius atque fugit alias quos cupiditate inventore cumque reiciendis voluptatibus dignissimos eum iure ducimus fugiat, quibusdam suscipit. Assumenda, quam. Obcaecati eos nisi eveniet, officiis nam laudantium aspernatur facere at ratione ut sint nesciunt accusamus facilis earum minima hic unde asperiores consectetur. Tempore itaque facilis voluptates rem est beatae ab recusandae voluptas atque assumenda doloremque ipsa impedit, at, ipsum nostrum expedita cumque porro illum excepturi asperiores et, dicta sunt magnam minus. Est eveniet dolor suscipit eum sapiente expedita ut quas nobis tempore! Iste dolor mollitia nobis explicabo impedit. Libero necessitatibus nobis iste vel, aperiam totam obcaecati aliquam non quos exercitationem aliquid. Est reprehenderit mollitia, fugit inventore doloremque deserunt laboriosam officia excepturi reiciendis consequuntur quam quisquam incidunt, non expedita modi alias animi libero asperiores impedit aliquam molestias iure, distinctio possimus provident. Unde tempora ad obcaecati magni? Corrupti, nam consectetur! Earum, consequuntur. Est autem optio obcaecati maiores? Quas ratione officiis est iste animi saepe quae ipsum totam eos dicta laboriosam minima, unde ducimus esse praesentium error, perferendis ad obcaecati necessitatibus laborum iusto dolorem. Iste ab fuga et rem, corporis consequuntur minima repudiandae autem assumenda eligendi doloribus quidem accusantium. Sed!
                </div>
            </div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ad. Magni expedita quis doloremque debitis error numquam unde sequi in soluta dolor odit excepturi culpa ab necessitatibus nulla, beatae est?
                </div>
            </div>
        </div>
    </div>
</div>


@endsection