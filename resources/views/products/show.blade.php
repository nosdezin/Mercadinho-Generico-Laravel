@extends("layouts.bodybase")

@section("content-main")
    <div class="buy-panel">
        <div class="describe">
            <img src="{{ $produto->image_url }}" alt="imagem de {{ $produto->name }}">
        </div>
        <div class="options">
            <h1>{{ $produto->nome }}</h1>
            <h2>R${{ $produto->preco }}</h2>
            <span>
                <h3>Estoque: {{ $produto->estoque }}</h3>
                <h4>Nota: {{ $produto->nota }}/10</h4>
            </span>
            <button class="btn-confirm">Comprar</button>
        </div>
    </div>

    <p class="font-bold text-2xl pl-10">Comentários:</p>
    <div class="reviews">
        <div class="comment">
            <p>Abrobrinha</p>
            <span>Nota: 0/0</span>
            <div class="fotos">
                <img src="https://static.vecteezy.com/system/resources/previews/006/998/431/non_2x/photo-camera-icons-photo-camera-icon-design-illustration-photo-camera-simple-sign-photo-camera-image-vector.jpg">
            </div>
        </div>
        <div class="comment">
            <p>Abrobrinha</p>
            <span>Nota: 0/0</span>
            <div class="grid grid-cols-2 fotos">
                <img src="https://static.vecteezy.com/system/resources/previews/006/998/431/non_2x/photo-camera-icons-photo-camera-icon-design-illustration-photo-camera-simple-sign-photo-camera-image-vector.jpg">
                <img src="https://static.vecteezy.com/system/resources/previews/006/998/431/non_2x/photo-camera-icons-photo-camera-icon-design-illustration-photo-camera-simple-sign-photo-camera-image-vector.jpg">
            </div>
        </div>
        <div class="comment">
            <p>Abrobrinha</p>
            <span>Nota: 0/0</span>
            <div class="grid grid-cols-2 grid-rows-2 fotos">
                <img class="col-span-2" src="https://static.vecteezy.com/system/resources/previews/006/998/431/non_2x/photo-camera-icons-photo-camera-icon-design-illustration-photo-camera-simple-sign-photo-camera-image-vector.jpg">
                <img src="https://static.vecteezy.com/system/resources/previews/006/998/431/non_2x/photo-camera-icons-photo-camera-icon-design-illustration-photo-camera-simple-sign-photo-camera-image-vector.jpg">
                <img src="https://static.vecteezy.com/system/resources/previews/006/998/431/non_2x/photo-camera-icons-photo-camera-icon-design-illustration-photo-camera-simple-sign-photo-camera-image-vector.jpg">
            </div>
        </div>
    </div>

    <p class="font-bold text-2xl pl-10">Semelhantes</p>
    <div class="other-products">
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
            <a href="#" class="product">
                <img
                    src="https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg">
                <span>NOME</span>
                <span>PREÇO</span>
            </a>
        </div>
    </div>
@endsection