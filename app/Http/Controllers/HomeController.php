<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    const COMPANY = 'Biffco Enterprises Ltd.';
    const COMPANY_EMAIL = 'Biffco@biffco.com';

    const CUSTOMER_NAME = 'Danniel Smith';
    const CUSTOMER_PHOTO = '/images/customer.png';

    /**
     * Analytic Dashboard
     */
    public function index()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Home',
                'url' => '/',
                'active' => true
            ],
        ];

        $chartData = [
            'yearlyRevenue' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'revenue' => [350, 500, 950, 700, 900],
                'total' => 3500,
                'currencySymbol' => '$',
            ],
            'productSold' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'quantity' => [800, 600, 1000, 800, 900],
                'total' => 4000,
            ],
            'growth' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'perYearRate' => [10, 20, 30, 40, 100],
                'total' => 10,
                'preSymbol' => '+',
                'postSymbol' => '%',
            ],
            'revenueReport' => [
                'month' => ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                'revenue' => [
                    'title' => 'Revenue',
                    'data' => [76, 85, 101, 98, 87, 105, 91, 114, 94],
                ],
                'netProfit' => [
                    'title' => 'Net Profit',
                    'data' => [35, 41, 36, 26, 45, 48, 52, 53, 41],
                ],
                'cashFlow' => [
                    'title' => 'Cash Flow',
                    'data' => [44, 55, 57, 56, 61, 58, 63, 60, 66],
                ],
            ],
            'productGrowthOverview' => [
                'productNames' => ['Books', 'Pens', 'Pencils', 'Box'],
                'data' => [88, 77, 66, 55],
            ],
            'thisYearGrowth' => [
                'label' => ['Yearly Growth'],
                'data' => [66],
            ],
            'investmentAmount' => [
                [
                    'title' => 'Investment',
                    'amount' => 1000,
                    'currencySymbol' => '$',
                    'profit' => 10,
                    'profitPercentage' => 50,
                    'loss' => 0,
                    'lossPercentage' => 0,
                ],
                [
                    'title' => 'Investment',
                    'amount' => 1000,
                    'currencySymbol' => '$',
                    'profit' => 10,
                    'profitPercentage' => 50,
                    'loss' => 0,
                    'lossPercentage' => 0,
                ],
                [
                    'title' => 'Investment',
                    'amount' => 1000,
                    'currencySymbol' => '$',
                    'profit' => 0,
                    'profitPercentage' => 0,
                    'loss' => 20,
                    'lossPercentage' => 30,
                ]
            ],
            'users' => User::latest()->paginate(5),
        ];

        return view('dashboard', [
            'pageTitle' => 'Blank Page',
            'data' => $chartData,
            'breadcrumbItems' => $breadcrumbsItems
        ]);
    }

    /**
     * Ecommerce Dashboard
     */
    public function ecommerceDashboard()
    {
        $chartData = $this->getChartData();
        $topCustomers = $this->getCustomers();
        $recentOrders = $this->getRecentOrders();

        return view('dashboards.ecommerce', [
            'pageTitle' => 'Ecommerce Dashboard',
            'data' => $chartData,
            'topCustomers' => $topCustomers,
            'recentOrders' => $recentOrders,
        ]);
    }

    /**
     * @return array[]
     */
    private function getChartData(): array
    {
        return [
            'revenueReport' => [
                'month' => ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
                'revenue' => [
                    'title' => 'Revenue',
                    'data' => [76, 85, 101, 98, 87, 105, 91, 114, 94],
                ],
                'netProfit' => [
                    'title' => 'Net Profit',
                    'data' => [35, 41, 36, 26, 45, 48, 52, 53, 41],
                ],
                'cashFlow' => [
                    'title' => 'Cash Flow',
                    'data' => [44, 55, 57, 56, 61, 58, 63, 60, 66],
                ],
            ],
            'revenue' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'data' => [350, 500, 950, 700, 100],
                'total' => 4000,
                'currencySymbol' => '$',
            ],
            'productSold' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'quantity' => [800, 600, 1000, 50, 100],
                'total' => 100,
            ],
            'growth' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'perYearRate' => [10, 20, 30, 40, 10],
                'total' => 10,
                'preSymbol' => '+',
                'postSymbol' => '%',
            ],
            'lastWeekOrder' => [
                'name' => 'Last Week Order',
                'data' => [44, 55, 57, 56, 61, 10],
                'total' => '10k+',
                'percentage' => 100,
                'preSymbol' => '-',
            ],
            'lastWeekProfit' => [
                'name' => 'Last Week Profit',
                'data' => [44, 55, 57, 56, 61, 10],
                'total' => '10k+',
                'percentage' => 100,
                'preSymbol' => '+',
            ],
            'lastWeekOverview' => [
                'labels' => ["Success", "Return"],
                'data' => [60, 40],
                'title' => 'Profit',
                'amount' => '650k+',
                'percentage' => 0.02,
            ],
        ];
    }

    /**
     * @return array[]
     */
    private function getCustomers(): array
    {
        return [
            [
                'serialNo' => 1,
                'name' => self::CUSTOMER_NAME,
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'green',
                'backgroundColor' => 'sky',
                'isMvpUser' => true,
                'photo' => self::CUSTOMER_PHOTO,
            ],
            [
                'serialNo' => 2,
                'name' => self::CUSTOMER_NAME,
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'sky',
                'backgroundColor' => 'orange',
                'isMvpUser' => false,
                'photo' => self::CUSTOMER_PHOTO,
            ],
            [
                'serialNo' => 3,
                'name' => self::CUSTOMER_NAME,
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'orange',
                'backgroundColor' => 'green',
                'isMvpUser' => false,
                'photo' => self::CUSTOMER_PHOTO,
            ],
            [
                'serialNo' => 4,
                'name' => self::CUSTOMER_NAME,
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'green',
                'backgroundColor' => 'sky',
                'isMvpUser' => true,
                'photo' => self::CUSTOMER_PHOTO,
            ],
            [
                'serialNo' => 5,
                'name' => self::CUSTOMER_NAME,
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'sky',
                'backgroundColor' => 'orange',
                'isMvpUser' => false,
                'photo' => self::CUSTOMER_PHOTO,
            ],
            [
                'serialNo' => 6,
                'name' => self::CUSTOMER_NAME,
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'orange',
                'backgroundColor' => 'green',
                'isMvpUser' => false,
                'photo' => self::CUSTOMER_PHOTO,
            ],
        ];
    }

    /**
     * @return array[]
     */
    private function getRecentOrders(): array
    {
        return [
            [
                'companyName' => self::COMPANY,
                'email' => self::COMPANY_EMAIL,
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'paid',
            ],
            [

                'companyName' => self::COMPANY,
                'email' => self::COMPANY_EMAIL,
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'paid',
            ],
            [
                'companyName' => self::COMPANY,
                'email' => self::COMPANY_EMAIL,
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'paid',
            ],
            [
                'companyName' => self::COMPANY,
                'email' => self::COMPANY_EMAIL,
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'due',
            ],
            [
                'companyName' => self::COMPANY,
                'email' => self::COMPANY_EMAIL,
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'paid',
            ],
            [
                'companyName' => self::COMPANY,
                'email' => self::COMPANY_EMAIL,
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'due',
            ],
        ];
    }
}
