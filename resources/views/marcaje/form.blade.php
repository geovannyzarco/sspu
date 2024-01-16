<form action="{{ route('marcaje.importData') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="archivo" accept=".txt">
    <button type="submit">Importar</button>
</form>
