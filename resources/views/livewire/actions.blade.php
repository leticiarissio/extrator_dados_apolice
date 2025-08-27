<div class="actions">
    <button 
        class="btn btn-primary" 
        id="extractBtn" 
        {{ $enable ? '' : 'disabled'}}
        wire:click="extrairDados"
    >
        🔍 Extrair Dados da Apólice
    </button>
    <button 
        class="btn btn-secondary" 
        id="clearBtn" 
        x-on:click="if(confirm('Tem certeza que deseja limpar tudo?')) { location.reload(); }"
    >
        🗑️ Limpar Tudo
    </button>
    <button class="btn btn-success" id="testBtn">
        🔗 Testar Conexão
    </button>
</div>
