<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Site Reports</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h1, h2 { border-bottom: 1px solid #ddd; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }
        th, td {
            border: 1px solid #bbb;
            padding: 8px 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .totals-table td {
            font-weight: bold;
        }
        .empty-row td {
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Site Reports</h1>

    <h2>Totals</h2>
    <table class="totals-table">
        <tr>
            <td>Total Users</td>
            <td>{{ $totalUsers }}</td>
        </tr>
        <tr>
            <td>Total Blogs</td>
            <td>{{ $totalBlogs }}</td>
        </tr>
    </table>

    <h2>Banned Blogs</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author Username</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bannedBlogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->author->username ?? 'Unknown' }}</td>
                </tr>
            @empty
                <tr class="empty-row">
                    <td colspan="2">No banned blogs.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <h2>Banned Users</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bannedUsers as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @empty
                <tr class="empty-row">
                    <td colspan="2">No banned users.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <h2>Active Blogs</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author Name</th>
            </tr>
        </thead>
        <tbody>
            @forelse($activeBlogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->author->name ?? 'Unknown' }}</td>
                </tr>
            @empty
                <tr class="empty-row">
                    <td colspan="2">No active blogs.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>