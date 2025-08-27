<div id="results">
    @if ($resultadoRecebido)
        <div class="results ${errorClass}">
            <h3>{{ $erroRecebido ? '❌' : '✅' }} {{ $erroRecebido ? 'Erro' : 'Sucesso' }}</h3>
            <div class="json-viewer">{{ $resultadoRecebido }}</div>

            <div class="result-actions">
                <button class="btn btn-primary">💾 Baixar JSON</button>
                <button class="btn btn-secondary">📋 Copiar</button>
            </div>
        </div>
    @endif
</div>
