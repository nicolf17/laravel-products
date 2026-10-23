@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div>
            <span class="eyebrow">Dashboard</span>
            <h1 class="page-title">Productos</h1>
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-primary">+ Nuevo producto</a>
    </div>

    <div class="stats-grid">
        <div class="stat-card primary">
            <span class="stat-label">Total de productos</span>
            <div class="stat-number">{{ $totalProducts }}</div>
            <div class="stat-footnote">Inventario activo</div>
        </div>
        <div class="stat-card success">
            <span class="stat-label">Bajo stock</span>
            <div class="stat-number">{{ $lowStock }}</div>
            <div class="stat-footnote">Productos con menos de 5 unidades</div>
        </div>
        <div class="stat-card warning">
            <span class="stat-label">Valor total</span>
            <div class="stat-number">${{ number_format($totalInventoryValue ?? 0, 2) }}</div>
            <div class="stat-footnote">Estimado de inventario</div>
        </div>
    </div>

    <div class="table-panel">
        <div class="table-toolbar">
            <h2>Listado de productos</h2>
            <span class="badge badge-info">{{ $products->count() }} items</span>
        </div>

        <div class="table-wrapper">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>#{{ $product->id }}</td>
                            <td>
                                <div class="product-name">{{ $product->name }}</div>
                                <div class="product-meta">{{ $product->description ?: 'Sin descripción' }}</div>
                            </td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                @if ($product->stock == 0)
                                    <span class="badge badge-out">Sin stock</span>
                                @elseif ($product->stock < 5)
                                    <span class="badge badge-warning">Bajo stock</span>
                                @else
                                    <span class="badge badge-info">Disponible</span>
                                @endif
                            </td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                        onsubmit="return confirm('¿Deseas eliminar este producto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center" style="padding: 28px; color: var(--muted);">
                                Aún no hay productos registrados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($products->hasPages())
            <div class="paginator">
                {{ $products->links() }}
            </div>
        @endif
    </div>
@endsection
