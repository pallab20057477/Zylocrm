$patterns = @(
    @{ pattern = 'https://images.unsplash.com/photo-1460925895917-afdab827c52f[^\"]*'; replace = 'assets/store/hero-1.jpg' },
    @{ pattern = 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40[^\"]*'; replace = 'assets/store/section-1.jpg' },
    @{ pattern = 'https://images.unsplash.com/photo-1551288049-bebda4e38f71[^\"]*'; replace = 'assets/store/section-2.jpg' }
)

Get-ChildItem -Path . -Filter *.php -Recurse | ForEach-Object {
    $path = $_.FullName
    $text = Get-Content -Raw -Path $path
    $orig = $text
    foreach ($p in $patterns) {
        $text = [regex]::Replace($text, $p.pattern, $p.replace)
    }
    if ($text -ne $orig) {
        Set-Content -Path $path -Value $text -Encoding UTF8
        Write-Output "Updated: $path"
    }
}

Write-Output "Replacement complete."
