<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Marcación</th>
        </tr>
    </thead>
    <tbody>
        @foreach($marcajes as $marcaje)
            <tr>
                <td>{{ $marcaje->codigo }}</td>
                <td>{{ $marcaje->marcacion }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
