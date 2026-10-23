<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f7fb;
            --card: #ffffff;
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --primary-soft: #eef2ff;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --text: #1f2937;
            --muted: #64748b;
            --border: #e2e8f0;
            --shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, 'Segoe UI', sans-serif;
            background: linear-gradient(180deg, #f8fafc 0%, #eef2ff 100%);
            color: var(--text);
        }

        a {
            text-decoration: none;
        }

        .app-shell {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px 56px;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 24px;
            border: 1px solid rgba(148, 163, 184, 0.25);
            background: rgba(255, 255, 255, 0.72);
            backdrop-filter: blur(10px);
            border-radius: 22px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.05);
            margin-bottom: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 1.15rem;
            color: var(--text);
        }

        .brand-mark {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary), #7c3aed);
            color: #fff;
            display: grid;
            place-items: center;
            font-size: 1rem;
            box-shadow: 0 12px 24px rgba(79, 70, 229, 0.28);
        }

        .nav-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 999px;
            background: var(--primary-soft);
            color: var(--primary);
            font-weight: 600;
            border: 1px solid rgba(79, 70, 229, 0.12);
        }

        .page-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 28px;
            box-shadow: var(--shadow);
            padding: 28px;
        }

        .alert-success {
            margin-bottom: 20px;
            border: 1px solid rgba(16, 185, 129, 0.2);
            background: rgba(16, 185, 129, 0.08);
            color: #065f46;
            border-radius: 16px;
            padding: 14px 16px;
            font-weight: 500;
        }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 24px;
        }

        .eyebrow {
            display: inline-block;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-size: 0.72rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 8px;
        }

        .page-title {
            font-size: clamp(2rem, 3vw, 2.5rem);
            font-weight: 800;
            margin: 0;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            border-radius: 12px;
            padding: 0.75rem 1.25rem;
            border: 1px solid transparent;
            transition: all 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: #fff;
            box-shadow: 0 14px 26px rgba(79, 70, 229, 0.24);
        }

        .btn-secondary {
            background: #fff;
            color: var(--text);
            border-color: var(--border);
        }

        .btn-warning {
            background: rgba(245, 158, 11, 0.12);
            color: #92400e;
            border-color: rgba(245, 158, 11, 0.2);
        }

        .btn-danger {
            background: rgba(239, 68, 68, 0.12);
            color: #b91c1c;
            border-color: rgba(239, 68, 68, 0.2);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 26px;
        }

        .stat-card {
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 20px;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        }

        .stat-card.primary {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.08), rgba(255,255,255,1));
        }

        .stat-card.success {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.08), rgba(255,255,255,1));
        }

        .stat-card.warning {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.09), rgba(255,255,255,1));
        }

        .stat-label {
            display: block;
            color: var(--muted);
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 0.82rem;
        }

        .stat-number {
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            font-weight: 800;
            color: var(--text);
            margin-bottom: 6px;
        }

        .stat-footnote {
            color: var(--muted);
            font-size: 0.82rem;
        }

        .table-panel {
            border: 1px solid var(--border);
            border-radius: 22px;
            background: #fff;
            overflow: hidden;
        }

        .table-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 22px;
            border-bottom: 1px solid var(--border);
            background: #f8fafc;
        }

        .table-toolbar h2 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 700;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        .modern-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 760px;
        }

        .modern-table th,
        .modern-table td {
            padding: 16px 22px;
            border-bottom: 1px solid var(--border);
            text-align: left;
            vertical-align: middle;
        }

        .modern-table thead th {
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
            background: #f8fafc;
            font-weight: 700;
        }

        .product-name {
            font-weight: 700;
            color: var(--text);
        }

        .product-meta {
            color: var(--muted);
            font-size: 0.82rem;
            margin-top: 4px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 90px;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            border: 1px solid transparent;
        }

        .badge-info {
            background: rgba(79, 70, 229, 0.08);
            color: var(--primary);
            border-color: rgba(79, 70, 229, 0.12);
        }

        .badge-warning {
            background: rgba(245, 158, 11, 0.12);
            color: #92400e;
            border-color: rgba(245, 158, 11, 0.2);
        }

        .badge-out {
            background: rgba(245, 158, 11, 0.12);
            color: #d60707;
            border-color: rgba(245, 158, 11, 0.2);
        }

        .table-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .product-form {
            max-width: 760px;
            margin: 0 auto;
            padding-top: 8px;
        }

        .form-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 22px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .field {
            margin-bottom: 18px;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 10px;
            color: var(--text);
        }

        .field input,
        .field textarea {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: #f8fafc;
            padding: 0.9rem 1rem;
            font-size: 0.96rem;
            color: var(--text);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .field input:focus,
        .field textarea:focus {
            outline: none;
            border-color: rgba(79, 70, 229, 0.45);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.08);
            background: #fff;
        }

        .field textarea {
            min-height: 120px;
            resize: vertical;
        }

        .field .invalid-feedback {
            display: block;
            margin-top: 8px;
            color: var(--danger);
            font-size: 0.82rem;
            font-weight: 500;
        }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 24px;
        }

        .paginator {
            display: flex;
            justify-content: center;
            padding: 18px 0 8px;
        }

        @media (max-width: 768px) {
            .topbar,
            .page-header,
            .form-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .stats-grid,
            .form-grid {
                grid-template-columns: 1fr;
            }

            .page-card {
                padding: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="app-shell">
        <header class="topbar">
            <div class="brand">
                <div class="brand-mark">P</div>
                Products Hub
            </div>
            <div class="nav-pill">Inventory dashboard</div>
        </header>

        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <main class="page-card">
            @yield('content')
        </main>
    </div>
</body>
</html>
