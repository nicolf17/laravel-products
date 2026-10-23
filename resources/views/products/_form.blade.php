@csrf

<div class="form-grid">
    <div class="field full">
        <label for="name">Nombre</label>
        <input id="name" type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="@error('name') is-invalid @enderror">
        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="field full">
        <label for="description">Descripción</label>
        <textarea id="description" name="description" class="@error('description') is-invalid @enderror">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="field">
        <label for="price">Precio</label>
        <input id="price" type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" class="@error('price') is-invalid @enderror">
        @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="field">
        <label for="stock">Stock</label>
        <input id="stock" type="number" name="stock" value="{{ old('stock', $product->stock ?? 0) }}" class="@error('stock') is-invalid @enderror">
        @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="form-actions">
    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
</div>