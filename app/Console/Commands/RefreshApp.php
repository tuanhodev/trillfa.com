<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class RefreshApp extends Command
{
    /**
     * Tên và chữ ký của lệnh console.
     *
     * @var string
     */
    protected $signature = 'app:refresh';

    /**
     * Mô tả lệnh console.
     *
     * @var string
     */
    protected $description = 'Kéo tệp từ GIT';

    /**
     * Mã đã được cập nhật hay chưa
     *
     * @var bool
     */
    private $alreadyUpToDate;

    /**
     * Log từ git kéo
     *
     * @var array
     */
    private $pullLog = [];

    /**
     * Log từ cài đặt soạn nhạc
     *
     * @var bool
     */
    private $composerLog = [];

    /**
     * Tạo một thể hiện lệnh mới.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Thực hiện lệnh console.
     *
     * @return mixed
     */
    public function handle()
    {

        if (! $this->runPull()) {

            $this->error("Đã xảy ra lỗi khi thực hiện 'git pull'. \nNhật ký:");

            foreach ($this->pullLog as $logLine) {
                $this->info($logLine);
            }

            return;
        }

        if ($this->alreadyUpToDate) {
            $this->info('Ứng dụng này đã được cập nhật');

            return;
        }

        /* if (! $this->runComposer()) {

            $this->error("Lỗi khi cập nhật tập tin soạn nhạc. \nNhật ký:");

            foreach ($this->composerLog as $logLine) {
                $this->info($logLine);
            }

            return;
        } */

        $this->info('Đã cập nhật ứng dụng thành công.');

    }

    /**
     * Run git pull process
     *
     * @return bool
     */
    private function runPull()
    {

        // $process = new Process('git pull origin main');
        $process = new Process('git push -u origin main');
        $this->info("Chạy 'git pull'");

        $process->run(function ($type, $buffer) {
            $this->pullLog[] = $buffer;

            if ($buffer == "Đã cập nhật.\n") {
                $this->alreadyUpToDate = true;
            }

        });

        return $process->isSuccessful();

    }

    /**
     * Run composer install process
     *
     * @return bool
     */

    /* private function runComposer()
    {

        $process = new Process('composer install');
        $this->info("Chạy 'cài đặt trình soạn thảo'");

        $process->run(function ($type, $buffer) {
            $this->composerLog[] = $buffer;
        });

        return $process->isSuccessful();

    } */
}
