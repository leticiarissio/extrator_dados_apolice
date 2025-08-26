<div class="container">
    @livewire('header')

    @livewire('config-section')

    @livewire('upload-area')

    <div class="preview-grid" id="previewGrid"></div>

    @livewire('actions')

    <div class="loading" id="loading">
        <div class="spinner"></div>
        <div class="loading-text">Processando arquivos com Claude AI...</div>
    </div>

    <div id="retryInfo" class="retry-info" style="display: none;">
        <p>⏳ Claude está sobrecarregado. Tentando novamente em <span class="retry-countdown" id="retryCountdown">0</span> segundos...</p>
    </div>

    <div id="results"></div>
</div>
