<div class="upload-area" id="uploadArea" x-on:click="$refs.arquivo.click()">
    <div class="upload-icon">📁</div>
    <div class="upload-text">Clique para selecionar arquivos ou arraste e solte aqui</div>
    <div class="upload-info">Formato: PDF (máx. 5MB)</div>
    <input type="file" 
           x-ref="arquivo" 
           id="fileInput" 
           accept="application/pdf"
           wire:model="arquivo"
    >
</div>

























{{-- <div x-data="{ files: [] }">
    <div class="upload-area" id="uploadArea" @click="$refs.input.click()"
        @drop.prevent="files = [...files, ...$event.dataTransfer.files]" @dragover.prevent>
        <div class="upload-icon">📁</div>
        <div class="upload-text">Clique para selecionar arquivos ou arraste e solte aqui</div>
        <div class="upload-info">Formato: PDF (máx. 5MB)</div>
        <input type="file" id="fileInput" accept="application/pdf" x-ref="input"
            @change="files = [...files, ...$event.target.files]" multiple style="display: none;">
    </div>
    <div x-show="files.length > 0">
        <h3>Arquivos Selecionados:</h3>
        <template x-for="(file, index) in files">
            <div class="file-item">
                <span x-text="file.name"></span>
                <button @click="files.splice(index, 1)" style="color: red;">❌</button>
            </div>
        </template>

        <button class="btn" @click="alert('Arquivos: ' + files.length)">
            🚀 Processar (<span x-text="files.length"></span>)
        </button>
        <button class="btn" @click="files = []" style="background: red;">
            🗑️ Limpar
        </button>
    </div>
</div> --}}
