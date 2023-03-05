<?php

namespace App\Utils;

class ApiResponse
{
    /**
     * mocks weather api response
     * @return string|false
     */
    public static function mockedResponse(): bool|string
    {
        return json_encode([
            "lat" => 39.2803,
            "lon" => 81.1322,
            "timezone" => "Asia/Shanghai",
            "timezone_offset" => 28800,
            "current" => [
                "dt" => 1677874310,
                "sunrise" => 1677891901,
                "sunset" => 1677932998,
                "temp" => 280.39,
                "feels_like" => 278.57,
                "pressure" => 1023,
                "humidity" => 27,
                "dew_point" => 263.79,
                "uvi" => 0,
                "clouds" => 7,
                "visibility" => 10000,
                "wind_speed" => 2.68,
                "wind_deg" => 178,
                "wind_gust" => 2.71,
                "weather" => [
                    [
                        "id" => 800,
                        "main" => "Clear",
                        "description" => "clear sky",
                        "icon" => "01n"
                    ]
                ]
            ],
            "minutely" => [
                [
                    "dt" => 1677874320,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874380,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874440,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874500,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874560,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874620,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874680,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874740,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874800,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874860,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874920,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677874980,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875040,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875100,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875160,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875220,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875280,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875340,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875400,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875460,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875520,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875580,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875640,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875700,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875760,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875820,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875880,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677875940,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876000,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876060,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876120,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876180,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876240,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876300,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876360,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876420,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876480,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876540,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876600,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876660,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876720,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876780,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876840,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876900,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677876960,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877020,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877080,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877140,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877200,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877260,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877320,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877380,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877440,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877500,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877560,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877620,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877680,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877740,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877800,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877860,
                    "precipitation" => 0
                ],
                [
                    "dt" => 1677877920,
                    "precipitation" => 0
                ]
            ],
            "hourly" => [
                [
                    "dt" => 1677873600,
                    "temp" => 280.39,
                    "feels_like" => 278.57,
                    "pressure" => 1023,
                    "humidity" => 27,
                    "dew_point" => 263.79,
                    "uvi" => 0,
                    "clouds" => 7,
                    "visibility" => 10000,
                    "wind_speed" => 2.68,
                    "wind_deg" => 178,
                    "wind_gust" => 2.71,
                    "weather" => [
                        [
                            "id" => 800,
                            "main" => "Clear",
                            "description" => "clear sky",
                            "icon" => "01n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677877200,
                    "temp" => 280.29,
                    "feels_like" => 278.47,
                    "pressure" => 1023,
                    "humidity" => 27,
                    "dew_point" => 263.71,
                    "uvi" => 0,
                    "clouds" => 7,
                    "visibility" => 10000,
                    "wind_speed" => 2.65,
                    "wind_deg" => 173,
                    "wind_gust" => 2.64,
                    "weather" => [
                        [
                            "id" => 800,
                            "main" => "Clear",
                            "description" => "clear sky",
                            "icon" => "01n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677880800,
                    "temp" => 280.05,
                    "feels_like" => 278.09,
                    "pressure" => 1023,
                    "humidity" => 27,
                    "dew_point" => 263.53,
                    "uvi" => 0,
                    "clouds" => 7,
                    "visibility" => 10000,
                    "wind_speed" => 2.78,
                    "wind_deg" => 165,
                    "wind_gust" => 2.82,
                    "weather" => [
                        [
                            "id" => 800,
                            "main" => "Clear",
                            "description" => "clear sky",
                            "icon" => "01n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677884400,
                    "temp" => 279.68,
                    "feels_like" => 277.32,
                    "pressure" => 1024,
                    "humidity" => 26,
                    "dew_point" => 262.82,
                    "uvi" => 0,
                    "clouds" => 9,
                    "visibility" => 10000,
                    "wind_speed" => 3.26,
                    "wind_deg" => 177,
                    "wind_gust" => 3.28,
                    "weather" => [
                        [
                            "id" => 800,
                            "main" => "Clear",
                            "description" => "clear sky",
                            "icon" => "01n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677888000,
                    "temp" => 279.08,
                    "feels_like" => 276.69,
                    "pressure" => 1024,
                    "humidity" => 27,
                    "dew_point" => 262.77,
                    "uvi" => 0,
                    "clouds" => 19,
                    "visibility" => 10000,
                    "wind_speed" => 3.12,
                    "wind_deg" => 179,
                    "wind_gust" => 3.11,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677891600,
                    "temp" => 278.5,
                    "feels_like" => 276.25,
                    "pressure" => 1025,
                    "humidity" => 26,
                    "dew_point" => 260.72,
                    "uvi" => 0,
                    "clouds" => 100,
                    "visibility" => 10000,
                    "wind_speed" => 2.77,
                    "wind_deg" => 183,
                    "wind_gust" => 2.78,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677895200,
                    "temp" => 279.14,
                    "feels_like" => 276.9,
                    "pressure" => 1025,
                    "humidity" => 25,
                    "dew_point" => 260.66,
                    "uvi" => 0.32,
                    "clouds" => 99,
                    "visibility" => 10000,
                    "wind_speed" => 2.92,
                    "wind_deg" => 181,
                    "wind_gust" => 2.93,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677898800,
                    "temp" => 280.32,
                    "feels_like" => 278.2,
                    "pressure" => 1026,
                    "humidity" => 23,
                    "dew_point" => 260.8,
                    "uvi" => 1.05,
                    "clouds" => 97,
                    "visibility" => 10000,
                    "wind_speed" => 3.1,
                    "wind_deg" => 180,
                    "wind_gust" => 3.54,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677902400,
                    "temp" => 282.11,
                    "feels_like" => 280.43,
                    "pressure" => 1026,
                    "humidity" => 20,
                    "dew_point" => 260.52,
                    "uvi" => 2.21,
                    "clouds" => 90,
                    "visibility" => 10000,
                    "wind_speed" => 2.97,
                    "wind_deg" => 177,
                    "wind_gust" => 3.63,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677906000,
                    "temp" => 283.65,
                    "feels_like" => 281.23,
                    "pressure" => 1025,
                    "humidity" => 18,
                    "dew_point" => 260.27,
                    "uvi" => 3.44,
                    "clouds" => 81,
                    "visibility" => 10000,
                    "wind_speed" => 2.33,
                    "wind_deg" => 166,
                    "wind_gust" => 2.7,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677909600,
                    "temp" => 284.87,
                    "feels_like" => 282.54,
                    "pressure" => 1024,
                    "humidity" => 17,
                    "dew_point" => 260.33,
                    "uvi" => 4.27,
                    "clouds" => 70,
                    "visibility" => 10000,
                    "wind_speed" => 1.85,
                    "wind_deg" => 141,
                    "wind_gust" => 2.02,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677913200,
                    "temp" => 285.76,
                    "feels_like" => 283.49,
                    "pressure" => 1023,
                    "humidity" => 16,
                    "dew_point" => 260.73,
                    "uvi" => 4.24,
                    "clouds" => 60,
                    "visibility" => 10000,
                    "wind_speed" => 1.35,
                    "wind_deg" => 119,
                    "wind_gust" => 1.4,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677916800,
                    "temp" => 286.4,
                    "feels_like" => 284.2,
                    "pressure" => 1022,
                    "humidity" => 16,
                    "dew_point" => 261.29,
                    "uvi" => 3.55,
                    "clouds" => 51,
                    "visibility" => 10000,
                    "wind_speed" => 1.1,
                    "wind_deg" => 96,
                    "wind_gust" => 1.06,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677920400,
                    "temp" => 286.97,
                    "feels_like" => 284.83,
                    "pressure" => 1022,
                    "humidity" => 16,
                    "dew_point" => 261.74,
                    "uvi" => 2.41,
                    "clouds" => 39,
                    "visibility" => 10000,
                    "wind_speed" => 1.7,
                    "wind_deg" => 100,
                    "wind_gust" => 1.55,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677924000,
                    "temp" => 287.29,
                    "feels_like" => 285.18,
                    "pressure" => 1021,
                    "humidity" => 16,
                    "dew_point" => 262.08,
                    "uvi" => 1.23,
                    "clouds" => 31,
                    "visibility" => 10000,
                    "wind_speed" => 2.52,
                    "wind_deg" => 102,
                    "wind_gust" => 2.38,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677927600,
                    "temp" => 287.27,
                    "feels_like" => 285.18,
                    "pressure" => 1021,
                    "humidity" => 17,
                    "dew_point" => 262.33,
                    "uvi" => 0.42,
                    "clouds" => 34,
                    "visibility" => 10000,
                    "wind_speed" => 2.86,
                    "wind_deg" => 105,
                    "wind_gust" => 2.71,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677931200,
                    "temp" => 286.62,
                    "feels_like" => 284.49,
                    "pressure" => 1022,
                    "humidity" => 18,
                    "dew_point" => 263.11,
                    "uvi" => 0,
                    "clouds" => 40,
                    "visibility" => 10000,
                    "wind_speed" => 2.74,
                    "wind_deg" => 105,
                    "wind_gust" => 3.32,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677934800,
                    "temp" => 285.47,
                    "feels_like" => 283.28,
                    "pressure" => 1022,
                    "humidity" => 20,
                    "dew_point" => 263.45,
                    "uvi" => 0,
                    "clouds" => 80,
                    "visibility" => 10000,
                    "wind_speed" => 2.97,
                    "wind_deg" => 110,
                    "wind_gust" => 3.05,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677938400,
                    "temp" => 284.68,
                    "feels_like" => 282.46,
                    "pressure" => 1023,
                    "humidity" => 22,
                    "dew_point" => 263.59,
                    "uvi" => 0,
                    "clouds" => 83,
                    "visibility" => 10000,
                    "wind_speed" => 2.94,
                    "wind_deg" => 115,
                    "wind_gust" => 2.98,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677942000,
                    "temp" => 283.9,
                    "feels_like" => 281.63,
                    "pressure" => 1024,
                    "humidity" => 23,
                    "dew_point" => 263.59,
                    "uvi" => 0,
                    "clouds" => 69,
                    "visibility" => 10000,
                    "wind_speed" => 2.64,
                    "wind_deg" => 117,
                    "wind_gust" => 2.65,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677945600,
                    "temp" => 283.21,
                    "feels_like" => 280.9,
                    "pressure" => 1024,
                    "humidity" => 24,
                    "dew_point" => 263.49,
                    "uvi" => 0,
                    "clouds" => 56,
                    "visibility" => 10000,
                    "wind_speed" => 2.5,
                    "wind_deg" => 123,
                    "wind_gust" => 2.53,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677949200,
                    "temp" => 282.54,
                    "feels_like" => 281.36,
                    "pressure" => 1024,
                    "humidity" => 24,
                    "dew_point" => 263.28,
                    "uvi" => 0,
                    "clouds" => 49,
                    "visibility" => 10000,
                    "wind_speed" => 2.35,
                    "wind_deg" => 124,
                    "wind_gust" => 2.36,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677952800,
                    "temp" => 281.97,
                    "feels_like" => 280.82,
                    "pressure" => 1024,
                    "humidity" => 25,
                    "dew_point" => 262.99,
                    "uvi" => 0,
                    "clouds" => 44,
                    "visibility" => 10000,
                    "wind_speed" => 2.18,
                    "wind_deg" => 124,
                    "wind_gust" => 2.17,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677956400,
                    "temp" => 281.43,
                    "feels_like" => 280.17,
                    "pressure" => 1023,
                    "humidity" => 25,
                    "dew_point" => 262.64,
                    "uvi" => 0,
                    "clouds" => 18,
                    "visibility" => 10000,
                    "wind_speed" => 2.2,
                    "wind_deg" => 115,
                    "wind_gust" => 2.23,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677960000,
                    "temp" => 281.02,
                    "feels_like" => 279.53,
                    "pressure" => 1023,
                    "humidity" => 25,
                    "dew_point" => 262.28,
                    "uvi" => 0,
                    "clouds" => 16,
                    "visibility" => 10000,
                    "wind_speed" => 2.4,
                    "wind_deg" => 114,
                    "wind_gust" => 2.37,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677963600,
                    "temp" => 280.6,
                    "feels_like" => 278.93,
                    "pressure" => 1024,
                    "humidity" => 25,
                    "dew_point" => 261.99,
                    "uvi" => 0,
                    "clouds" => 14,
                    "visibility" => 10000,
                    "wind_speed" => 2.53,
                    "wind_deg" => 126,
                    "wind_gust" => 2.55,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677967200,
                    "temp" => 280.08,
                    "feels_like" => 278.3,
                    "pressure" => 1024,
                    "humidity" => 26,
                    "dew_point" => 261.74,
                    "uvi" => 0,
                    "clouds" => 16,
                    "visibility" => 10000,
                    "wind_speed" => 2.55,
                    "wind_deg" => 133,
                    "wind_gust" => 2.54,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677970800,
                    "temp" => 279.73,
                    "feels_like" => 277.81,
                    "pressure" => 1024,
                    "humidity" => 26,
                    "dew_point" => 261.43,
                    "uvi" => 0,
                    "clouds" => 18,
                    "visibility" => 10000,
                    "wind_speed" => 2.65,
                    "wind_deg" => 140,
                    "wind_gust" => 2.66,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677974400,
                    "temp" => 279.39,
                    "feels_like" => 277.13,
                    "pressure" => 1025,
                    "humidity" => 25,
                    "dew_point" => 261.06,
                    "uvi" => 0,
                    "clouds" => 19,
                    "visibility" => 10000,
                    "wind_speed" => 3.02,
                    "wind_deg" => 148,
                    "wind_gust" => 3.04,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677978000,
                    "temp" => 278.97,
                    "feels_like" => 276.55,
                    "pressure" => 1025,
                    "humidity" => 26,
                    "dew_point" => 260.76,
                    "uvi" => 0,
                    "clouds" => 36,
                    "visibility" => 10000,
                    "wind_speed" => 3.13,
                    "wind_deg" => 161,
                    "wind_gust" => 3.11,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677981600,
                    "temp" => 279.24,
                    "feels_like" => 277.03,
                    "pressure" => 1026,
                    "humidity" => 25,
                    "dew_point" => 260.86,
                    "uvi" => 0.32,
                    "clouds" => 25,
                    "visibility" => 10000,
                    "wind_speed" => 2.91,
                    "wind_deg" => 166,
                    "wind_gust" => 2.93,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677985200,
                    "temp" => 280.78,
                    "feels_like" => 279.12,
                    "pressure" => 1026,
                    "humidity" => 23,
                    "dew_point" => 261.16,
                    "uvi" => 1.04,
                    "clouds" => 21,
                    "visibility" => 10000,
                    "wind_speed" => 2.56,
                    "wind_deg" => 171,
                    "wind_gust" => 3.07,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677988800,
                    "temp" => 282.48,
                    "feels_like" => 281.54,
                    "pressure" => 1025,
                    "humidity" => 20,
                    "dew_point" => 260.83,
                    "uvi" => 2.15,
                    "clouds" => 19,
                    "visibility" => 10000,
                    "wind_speed" => 2.03,
                    "wind_deg" => 178,
                    "wind_gust" => 2.35,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677992400,
                    "temp" => 283.87,
                    "feels_like" => 281.47,
                    "pressure" => 1025,
                    "humidity" => 18,
                    "dew_point" => 260.63,
                    "uvi" => 3.32,
                    "clouds" => 18,
                    "visibility" => 10000,
                    "wind_speed" => 1.32,
                    "wind_deg" => 185,
                    "wind_gust" => 1.48,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677996000,
                    "temp" => 284.97,
                    "feels_like" => 282.65,
                    "pressure" => 1024,
                    "humidity" => 17,
                    "dew_point" => 260.67,
                    "uvi" => 4.11,
                    "clouds" => 25,
                    "visibility" => 10000,
                    "wind_speed" => 0.61,
                    "wind_deg" => 200,
                    "wind_gust" => 0.66,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1677999600,
                    "temp" => 285.89,
                    "feels_like" => 283.64,
                    "pressure" => 1023,
                    "humidity" => 16,
                    "dew_point" => 260.83,
                    "uvi" => 4.11,
                    "clouds" => 92,
                    "visibility" => 10000,
                    "wind_speed" => 0.34,
                    "wind_deg" => 258,
                    "wind_gust" => 0.36,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678003200,
                    "temp" => 286.59,
                    "feels_like" => 284.41,
                    "pressure" => 1022,
                    "humidity" => 16,
                    "dew_point" => 261.19,
                    "uvi" => 3.45,
                    "clouds" => 67,
                    "visibility" => 10000,
                    "wind_speed" => 0.48,
                    "wind_deg" => 291,
                    "wind_gust" => 0.63,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678006800,
                    "temp" => 287.1,
                    "feels_like" => 284.97,
                    "pressure" => 1022,
                    "humidity" => 16,
                    "dew_point" => 261.56,
                    "uvi" => 2.35,
                    "clouds" => 53,
                    "visibility" => 10000,
                    "wind_speed" => 0.19,
                    "wind_deg" => 278,
                    "wind_gust" => 0.4,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678010400,
                    "temp" => 287.34,
                    "feels_like" => 285.23,
                    "pressure" => 1021,
                    "humidity" => 16,
                    "dew_point" => 261.82,
                    "uvi" => 1.17,
                    "clouds" => 45,
                    "visibility" => 10000,
                    "wind_speed" => 0.65,
                    "wind_deg" => 173,
                    "wind_gust" => 0.77,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678014000,
                    "temp" => 287.35,
                    "feels_like" => 285.24,
                    "pressure" => 1021,
                    "humidity" => 16,
                    "dew_point" => 262.01,
                    "uvi" => 0.4,
                    "clouds" => 54,
                    "visibility" => 10000,
                    "wind_speed" => 1.36,
                    "wind_deg" => 179,
                    "wind_gust" => 1.43,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678017600,
                    "temp" => 286.96,
                    "feels_like" => 284.87,
                    "pressure" => 1021,
                    "humidity" => 18,
                    "dew_point" => 262.88,
                    "uvi" => 0,
                    "clouds" => 62,
                    "visibility" => 10000,
                    "wind_speed" => 1.89,
                    "wind_deg" => 183,
                    "wind_gust" => 2.08,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678021200,
                    "temp" => 286,
                    "feels_like" => 283.86,
                    "pressure" => 1022,
                    "humidity" => 20,
                    "dew_point" => 263.36,
                    "uvi" => 0,
                    "clouds" => 100,
                    "visibility" => 10000,
                    "wind_speed" => 2.02,
                    "wind_deg" => 192,
                    "wind_gust" => 2.09,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678024800,
                    "temp" => 285.35,
                    "feels_like" => 283.17,
                    "pressure" => 1022,
                    "humidity" => 21,
                    "dew_point" => 263.58,
                    "uvi" => 0,
                    "clouds" => 99,
                    "visibility" => 10000,
                    "wind_speed" => 2.21,
                    "wind_deg" => 198,
                    "wind_gust" => 2.26,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678028400,
                    "temp" => 284.56,
                    "feels_like" => 282.33,
                    "pressure" => 1023,
                    "humidity" => 22,
                    "dew_point" => 263.67,
                    "uvi" => 0,
                    "clouds" => 99,
                    "visibility" => 10000,
                    "wind_speed" => 2.28,
                    "wind_deg" => 204,
                    "wind_gust" => 2.33,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678032000,
                    "temp" => 283.81,
                    "feels_like" => 281.56,
                    "pressure" => 1023,
                    "humidity" => 24,
                    "dew_point" => 263.85,
                    "uvi" => 0,
                    "clouds" => 98,
                    "visibility" => 10000,
                    "wind_speed" => 2.11,
                    "wind_deg" => 208,
                    "wind_gust" => 2.16,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678035600,
                    "temp" => 283.06,
                    "feels_like" => 282.39,
                    "pressure" => 1023,
                    "humidity" => 25,
                    "dew_point" => 263.96,
                    "uvi" => 0,
                    "clouds" => 90,
                    "visibility" => 10000,
                    "wind_speed" => 1.82,
                    "wind_deg" => 215,
                    "wind_gust" => 1.85,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678039200,
                    "temp" => 282.27,
                    "feels_like" => 281.91,
                    "pressure" => 1022,
                    "humidity" => 26,
                    "dew_point" => 264.06,
                    "uvi" => 0,
                    "clouds" => 77,
                    "visibility" => 10000,
                    "wind_speed" => 1.4,
                    "wind_deg" => 231,
                    "wind_gust" => 1.43,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04n"
                        ]
                    ],
                    "pop" => 0
                ],
                [
                    "dt" => 1678042800,
                    "temp" => 281.61,
                    "feels_like" => 281.61,
                    "pressure" => 1022,
                    "humidity" => 28,
                    "dew_point" => 264.09,
                    "uvi" => 0,
                    "clouds" => 4,
                    "visibility" => 10000,
                    "wind_speed" => 0.91,
                    "wind_deg" => 245,
                    "wind_gust" => 0.97,
                    "weather" => [
                        [
                            "id" => 800,
                            "main" => "Clear",
                            "description" => "clear sky",
                            "icon" => "01n"
                        ]
                    ],
                    "pop" => 0
                ]
            ],
            "daily" => [
                [
                    "dt" => 1677909600,
                    "sunrise" => 1677891901,
                    "sunset" => 1677932998,
                    "moonrise" => 1677921540,
                    "moonset" => 1677887160,
                    "moon_phase" => 0.4,
                    "temp" => [
                        "day" => 284.87,
                        "min" => 278.5,
                        "max" => 287.29,
                        "night" => 283.9,
                        "eve" => 286.62,
                        "morn" => 279.08
                    ],
                    "feels_like" => [
                        "day" => 282.54,
                        "night" => 281.63,
                        "eve" => 284.49,
                        "morn" => 276.69
                    ],
                    "pressure" => 1024,
                    "humidity" => 17,
                    "dew_point" => 260.33,
                    "wind_speed" => 3.26,
                    "wind_deg" => 167,
                    "wind_gust" => 3.63,
                    "weather" => [
                        [
                            "id" => 803,
                            "main" => "Clouds",
                            "description" => "broken clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "clouds" => 70,
                    "pop" => 0,
                    "uvi" => 4.27
                ],
                [
                    "dt" => 1677996000,
                    "sunrise" => 1677978211,
                    "sunset" => 1678019461,
                    "moonrise" => 1678011600,
                    "moonset" => 1677975480,
                    "moon_phase" => 0.43,
                    "temp" => [
                        "day" => 284.97,
                        "min" => 278.97,
                        "max" => 287.35,
                        "night" => 284.56,
                        "eve" => 286.96,
                        "morn" => 279.39
                    ],
                    "feels_like" => [
                        "day" => 282.65,
                        "night" => 282.33,
                        "eve" => 284.87,
                        "morn" => 277.13
                    ],
                    "pressure" => 1024,
                    "humidity" => 17,
                    "dew_point" => 260.67,
                    "wind_speed" => 3.13,
                    "wind_deg" => 161,
                    "wind_gust" => 3.11,
                    "weather" => [
                        [
                            "id" => 802,
                            "main" => "Clouds",
                            "description" => "scattered clouds",
                            "icon" => "03d"
                        ]
                    ],
                    "clouds" => 25,
                    "pop" => 0,
                    "uvi" => 4.11
                ],
                [
                    "dt" => 1678082400,
                    "sunrise" => 1678064521,
                    "sunset" => 1678105924,
                    "moonrise" => 1678101780,
                    "moonset" => 1678063560,
                    "moon_phase" => 0.46,
                    "temp" => [
                        "day" => 286.26,
                        "min" => 280.06,
                        "max" => 288.44,
                        "night" => 285.07,
                        "eve" => 287.96,
                        "morn" => 280.06
                    ],
                    "feels_like" => [
                        "day" => 284.12,
                        "night" => 282.89,
                        "eve" => 285.99,
                        "morn" => 279.02
                    ],
                    "pressure" => 1020,
                    "humidity" => 19,
                    "dew_point" => 263.03,
                    "wind_speed" => 2.72,
                    "wind_deg" => 165,
                    "wind_gust" => 2.73,
                    "weather" => [
                        [
                            "id" => 800,
                            "main" => "Clear",
                            "description" => "clear sky",
                            "icon" => "01d"
                        ]
                    ],
                    "clouds" => 2,
                    "pop" => 0,
                    "uvi" => 4.41
                ],
                [
                    "dt" => 1678168800,
                    "sunrise" => 1678150829,
                    "sunset" => 1678192386,
                    "moonrise" => 1678191780,
                    "moonset" => 1678151400,
                    "moon_phase" => 0.5,
                    "temp" => [
                        "day" => 287.43,
                        "min" => 280.77,
                        "max" => 289.59,
                        "night" => 286.58,
                        "eve" => 288.9,
                        "morn" => 280.77
                    ],
                    "feels_like" => [
                        "day" => 285.44,
                        "night" => 284.61,
                        "eve" => 287.05,
                        "morn" => 279.21
                    ],
                    "pressure" => 1020,
                    "humidity" => 20,
                    "dew_point" => 264.86,
                    "wind_speed" => 3.52,
                    "wind_deg" => 182,
                    "wind_gust" => 3.96,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02d"
                        ]
                    ],
                    "clouds" => 23,
                    "pop" => 0,
                    "uvi" => 4.16
                ],
                [
                    "dt" => 1678255200,
                    "sunrise" => 1678237138,
                    "sunset" => 1678278848,
                    "moonrise" => 1678281900,
                    "moonset" => 1678239180,
                    "moon_phase" => 0.52,
                    "temp" => [
                        "day" => 288.33,
                        "min" => 281.78,
                        "max" => 290.55,
                        "night" => 286.81,
                        "eve" => 289.86,
                        "morn" => 281.83
                    ],
                    "feels_like" => [
                        "day" => 286.37,
                        "night" => 284.81,
                        "eve" => 288.08,
                        "morn" => 281.02
                    ],
                    "pressure" => 1023,
                    "humidity" => 18,
                    "dew_point" => 264.55,
                    "wind_speed" => 2.29,
                    "wind_deg" => 151,
                    "wind_gust" => 2.3,
                    "weather" => [
                        [
                            "id" => 800,
                            "main" => "Clear",
                            "description" => "clear sky",
                            "icon" => "01d"
                        ]
                    ],
                    "clouds" => 0,
                    "pop" => 0,
                    "uvi" => 4.93
                ],
                [
                    "dt" => 1678341600,
                    "sunrise" => 1678323445,
                    "sunset" => 1678365310,
                    "moonrise" => 1678371960,
                    "moonset" => 1678326840,
                    "moon_phase" => 0.55,
                    "temp" => [
                        "day" => 288.57,
                        "min" => 281.84,
                        "max" => 290.38,
                        "night" => 287.1,
                        "eve" => 290.06,
                        "morn" => 281.84
                    ],
                    "feels_like" => [
                        "day" => 286.64,
                        "night" => 285.1,
                        "eve" => 288.28,
                        "morn" => 280.97
                    ],
                    "pressure" => 1014,
                    "humidity" => 18,
                    "dew_point" => 264.21,
                    "wind_speed" => 1.87,
                    "wind_deg" => 48,
                    "wind_gust" => 1.94,
                    "weather" => [
                        [
                            "id" => 801,
                            "main" => "Clouds",
                            "description" => "few clouds",
                            "icon" => "02d"
                        ]
                    ],
                    "clouds" => 17,
                    "pop" => 0,
                    "uvi" => 5
                ],
                [
                    "dt" => 1678428000,
                    "sunrise" => 1678409752,
                    "sunset" => 1678451772,
                    "moonrise" => 1678462200,
                    "moonset" => 1678414500,
                    "moon_phase" => 0.58,
                    "temp" => [
                        "day" => 287.25,
                        "min" => 282.52,
                        "max" => 289.4,
                        "night" => 285.74,
                        "eve" => 288.74,
                        "morn" => 282.52
                    ],
                    "feels_like" => [
                        "day" => 285.21,
                        "night" => 283.73,
                        "eve" => 286.88,
                        "morn" => 281.59
                    ],
                    "pressure" => 1013,
                    "humidity" => 19,
                    "dew_point" => 263.9,
                    "wind_speed" => 4.54,
                    "wind_deg" => 46,
                    "wind_gust" => 6.6,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "clouds" => 94,
                    "pop" => 0,
                    "uvi" => 5
                ],
                [
                    "dt" => 1678514400,
                    "sunrise" => 1678496059,
                    "sunset" => 1678538233,
                    "moonrise" => 0,
                    "moonset" => 1678502340,
                    "moon_phase" => 0.62,
                    "temp" => [
                        "day" => 283.48,
                        "min" => 279.79,
                        "max" => 285.78,
                        "night" => 282.99,
                        "eve" => 285.18,
                        "morn" => 279.79
                    ],
                    "feels_like" => [
                        "day" => 281.25,
                        "night" => 280.66,
                        "eve" => 283.04,
                        "morn" => 276.2
                    ],
                    "pressure" => 1028,
                    "humidity" => 26,
                    "dew_point" => 264.77,
                    "wind_speed" => 7.54,
                    "wind_deg" => 80,
                    "wind_gust" => 12.22,
                    "weather" => [
                        [
                            "id" => 804,
                            "main" => "Clouds",
                            "description" => "overcast clouds",
                            "icon" => "04d"
                        ]
                    ],
                    "clouds" => 97,
                    "pop" => 0,
                    "uvi" => 5
                ]
            ]]);
    }

    public static function partialResponse():array
    {
        return [
            "lat" => 39.2803,
            "lon" => 81.1322,
            "timezone" => "Asia/Shanghai",
            "timezone_offset" => 28800
        ];
    }
}
