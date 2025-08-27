<div class="config-section">
    <h3>⚙️ Configuração da API</h3>
    <div class="form-group">
        <label for="apiUrl">URL da API:</label>
        <input 
            type="text" 
            id="apiUrl" 
            {{-- value="https://insurancepolicyextractor.azurewebsites.net/api/apolice/extract" --}}
            value="https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent"
            placeholder="URL da API"
            disabled            
        >
    </div>
</div>
