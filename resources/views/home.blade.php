@extends('layouts.main')

@section('isi')

<div class="container mt-4">
    <center><h1>{{ $judul }}</h1></center>
    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione corrupti nobis numquam reprehenderit nesciunt vero consequatur magni distinctio, temporibus impedit ex minima iste quisquam omnis! Corporis ducimus fugit facilis, eos iure porro ipsum, ad incidunt provident rerum alias blanditiis dolore impedit nostrum quia reprehenderit, ipsa vero quis dignissimos odio voluptatem unde? Quis, ducimus maxime. Ex, tempora ipsam eius deserunt corrupti praesentium eligendi. Explicabo tempore sed, asperiores, dolores quisquam maiores optio, aliquid perferendis commodi dolor atque suscipit. Illo, officia doloremque architecto culpa odio voluptatibus enim? Doloribus placeat modi animi rerum vel et ipsam veritatis? Voluptate quam eveniet veniam eaque? Quibusdam perspiciatis vel impedit fuga eaque exercitationem quas dolores alias suscipit maiores modi, accusamus corrupti aut repellat harum dolor dolorem, fugiat, ad quia assumenda. Laboriosam ullam, explicabo consectetur ea rerum nam animi voluptates tempora vitae quidem numquam et hic praesentium commodi molestias, porro dicta magnam tenetur quos pariatur corrupti. Iusto, fugiat? Exercitationem, tenetur dolorum! Fugit deserunt accusantium eaque autem iste corrupti aliquam quisquam, rem ullam soluta excepturi dicta atque quas iure at quos minima veritatis porro exercitationem, animi facilis officiis laudantium quam dolore! A doloribus excepturi, aut numquam facere id accusantium deserunt magnam, illum cum sapiente itaque voluptate quod natus! Voluptates obcaecati totam dolor veritatis pariatur in placeat quia iusto porro, facere consectetur. Quos possimus repellendus impedit a omnis facilis pariatur, expedita, ea voluptates asperiores ipsa excepturi dolor. Incidunt quis culpa aperiam laborum facere dolor veritatis nemo nihil excepturi commodi voluptatem libero nisi expedita repudiandae, minima esse natus architecto atque modi ex consequatur non? Excepturi ab maiores placeat perferendis, animi ratione facilis, dolor aut praesentium est deserunt eius architecto quae ea, et molestiae dolore officia debitis numquam dicta id sequi repudiandae vel? Quia adipisci nemo ad eligendi similique corrupti, provident voluptatum quas sapiente blanditiis consequuntur inventore. Non beatae at repudiandae earum provident unde vero quidem dolor suscipit quis, minima illum iusto nostrum magnam. Earum deleniti sint autem aliquam hic pariatur et nesciunt veniam tempora harum, dolorem in. Doloribus, eum? Itaque delectus assumenda, vero quam esse in fugiat sint molestiae nisi? Sunt voluptatibus dolores enim pariatur doloremque consequuntur dicta voluptatum saepe, quo culpa blanditiis eligendi esse placeat inventore, ut laudantium, doloribus reiciendis natus. Laboriosam animi aliquid, nostrum esse illum nihil iure voluptatibus facere debitis distinctio voluptatum quidem beatae accusantium earum fugit placeat. Dolore sunt iste sed incidunt vel autem, voluptates obcaecati provident? Libero nemo reprehenderit doloremque ducimus nobis dicta impedit obcaecati, saepe quis.</h5>
</div>
   
@endsection

