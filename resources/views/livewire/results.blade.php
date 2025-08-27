<div id="results {{ $erroRecebido ? 'error' : ''}}">
    @if ($resultadoRecebido)
        <div class="results ${errorClass}">
            <h3>{{ $erroRecebido ? '❌' : '✅' }} {{ $erroRecebido ? 'Erro' : 'Sucesso' }}</h3>
            <div class="json-viewer">{{ $resultadoRecebido }}</div>
            @if (!$erroRecebido)
                <div class="result-actions">
                    <button class="btn btn-primary">💾 Baixar JSON</button>
                    <button class="btn btn-secondary">📋 Copiar</button>
                </div>
            @endif
        </div>
    @endif
</div>
