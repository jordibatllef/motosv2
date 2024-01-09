<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Añadir ariculo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

    <form action="?controller=Articulo&action=add" method="post">
        <input type="text" name="nombre" placeholder="Nombre"/>
        <br>
        <input type="number" name="precio" placeholder="precio"/>
        <br>
        <textarea  name="descripcion" placeholder="Desc"></textarea>
        <br>
        <input type="number" name="idcategoria" placeholder="idCat"/>
        <button type="submit">Guardar</button>
    </form>
    </section>
</div>