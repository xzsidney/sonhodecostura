<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Debug Mode Ativado</h1>";

echo "<h2>Checagem de Permissoes</h2>";
echo "Storage: " . (is_writable(__DIR__.'/../storage') ? 'OK' : 'FALHOU') . "<br>";
echo "Bootstrap/Cache: " . (is_writable(__DIR__.'/../bootstrap/cache') ? 'OK' : 'FALHOU') . "<br>";

echo "<h2>Limpando Cache Corrompido da Hostinger...</h2>";
$files = glob(__DIR__.'/../bootstrap/cache/*.php');
foreach($files as $file) {
    if(is_file($file)) {
        unlink($file);
        echo "Apagado: " . basename($file) . "<br>";
    }
}
echo "Cache limpo com sucesso!<br>";

echo "<h2>Checagem de .env</h2>";
echo ".env existe? " . (file_exists(__DIR__.'/../.env') ? 'SIM' : 'NAO') . "<br>";

echo "<h2>Testando Autoload</h2>";
try {
    require __DIR__.'/../vendor/autoload.php';
    echo "Autoload: OK<br>";
} catch (Exception $e) {
    echo "Autoload Erro: " . $e->getMessage() . "<br>";
}

echo "<h2>Testando Boot do Laravel</h2>";
try {
    $app = require_once __DIR__.'/../bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    echo "Laravel Boot: OK<br>";
} catch (Throwable $e) {
    echo "<h3>Erro Secundário no Laravel (O renderizador de erro falhou):</h3>";
    echo "<pre>" . $e->getMessage() . "</pre>";
    
    echo "<h3>Lendo o Log Oficial do Laravel para achar o ERRO ORIGINAL:</h3>";
    $logPath = __DIR__.'/../storage/logs/laravel.log';
    if(file_exists($logPath)) {
        $log = file_get_contents($logPath);
        // Pega os últimos 2000 caracteres para ver o erro mais recente
        echo "<pre style='background:#333; color:#fff; padding:10px; overflow:auto;'>";
        echo htmlspecialchars(substr($log, -4000));
        echo "</pre>";
    } else {
        echo "O arquivo laravel.log não existe! Permissões ou caminho errado.";
    }
}
