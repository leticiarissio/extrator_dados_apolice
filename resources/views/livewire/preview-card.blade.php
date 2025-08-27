
<div class="preview-grid" id="previewGrid">
    @if($nomeArquivoRecebido)
        <div class="preview-card">
            <div class="preview-content">
                <div class="file-info">
                    <div class="file-name">{{ $nomeArquivoRecebido }}</div>
                    <button class="remove-btn" wire:click="removerArquivo">×</button>
                    <div class="pdf-icon">📄</div>
                </div>
            </div>
        </div>
    @endif
</div>
