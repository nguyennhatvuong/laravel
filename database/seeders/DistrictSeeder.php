<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        District::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data=[
            0: Object { DistrictID: 3695, ProvinceID: 202, DistrictName: "Thành Phố Thủ Đức", … }
​​​
1: Object { DistrictID: 3694, ProvinceID: 246, DistrictName: "Huyện Quảng Hòa", … }
​​​
2: Object { DistrictID: 3451, ProvinceID: 268, DistrictName: "Quận Đặc Biệt", … }
​​​
3: Object { DistrictID: 3450, ProvinceID: 201, DistrictName: "Quận Vật Tư HN", … }
​​​
4: Object { DistrictID: 3449, ProvinceID: 202, DistrictName: "Quận Vật Tư HCM", … }
​​​
5: Object { DistrictID: 3448, ProvinceID: 202, DistrictName: "Quận Đặc Biệt DC", … }
​​​
6: Object { DistrictID: 3447, ProvinceID: 203, DistrictName: "Quận Đặc Biệt", … }
​​​
7: Object { DistrictID: 3446, ProvinceID: 259, DistrictName: "Huyện Ia H Drai", … }
​​​
8: Object { DistrictID: 3445, ProvinceID: 250, DistrictName: "Huyện Long Mỹ", … }
​​​
9: Object { DistrictID: 3444, ProvinceID: 239, DistrictName: "Huyện Phú Riềng", … }
​​​
10: Object { DistrictID: 3443, ProvinceID: 214, DistrictName: "Thị xã Duyên Hải", … }
​​​
11: Object { DistrictID: 3442, ProvinceID: 201, DistrictName: "Quận Đặc Biệt", … }
​​​
12: Object { DistrictID: 3441, ProvinceID: 236, DistrictName: "Thị xã Kỳ Anh", … }
​​​
13: Object { DistrictID: 3440, ProvinceID: 201, DistrictName: "Quận Nam Từ Liêm", … }
​​​
14: Object { DistrictID: 3418, ProvinceID: 210, DistrictName: "Huyện M Đrắk", … }
​​​
15: Object { DistrictID: 3329, ProvinceID: 211, DistrictName: "Thị xã Kiến Tường", … }
​​​
16: Object { DistrictID: 3327, ProvinceID: 233, DistrictName: "Huyện Yên Mô", … }
​​​
17: Object { DistrictID: 3323, ProvinceID: 231, DistrictName: "Huyện Xuân Trường", … }
​​​
18: Object { DistrictID: 3320, ProvinceID: 236, DistrictName: "Huyện Vũ Quang", … }
​​​
19: Object { DistrictID: 3319, ProvinceID: 231, DistrictName: "Huyện Vụ Bản", … }
​​​
20: Object { DistrictID: 3317, ProvinceID: 220, DistrictName: "Huyện Vĩnh Thạnh", … }
​​​
21: Object { DistrictID: 3315, ProvinceID: 211, DistrictName: "Huyện Vĩnh Hưng", … }
​​​
22: Object { DistrictID: 3312, ProvinceID: 262, DistrictName: "Huyện Vân Canh", … }
​​​
23: Object { DistrictID: 3311, ProvinceID: 247, DistrictName: "Huyện Văn Quan", … }
​​​
24: Object { DistrictID: 3310, ProvinceID: 247, DistrictName: "Huyện Văn Lãng", … }
​​​
25: Object { DistrictID: 3308, ProvinceID: 231, DistrictName: "Huyện Trực Ninh", … }
​​​
26: Object { DistrictID: 3305, ProvinceID: 246, DistrictName: "Huyện Trà Lĩnh", … }
​​​
27: Object { DistrictID: 3304, ProvinceID: 242, DistrictName: "Huyện Trà Bồng", … }
​​​
28: Object { DistrictID: 3303, ProvinceID: 201, DistrictName: "Huyện Thường Tín", … }
​​​
29: Object { DistrictID: 3302, ProvinceID: 261, DistrictName: "Huyện Thuận Nam", … }
​​​
30: Object { DistrictID: 3301, ProvinceID: 261, DistrictName: "Huyện Thuận Bắc", … }
​​​
31: Object { DistrictID: 3300, ProvinceID: 220, DistrictName: "Huyện Thới Lai", … }
​​​
32: Object { DistrictID: 3299, ProvinceID: 246, DistrictName: "Huyện Thông Nông", … }
​​​
33: Object { DistrictID: 3298, ProvinceID: 234, DistrictName: "Huyện Thiệu Hóa", … }
​​​
34: Object { DistrictID: 3294, ProvinceID: 225, DistrictName: "Huyện Thanh Miện", … }
​​​
35: Object { DistrictID: 3293, ProvinceID: 211, DistrictName: "Huyện Thạnh Hóa", … }
​​​
36: Object { DistrictID: 3292, ProvinceID: 225, DistrictName: "Huyện Thanh Hà", … }
​​​
37: Object { DistrictID: 3291, ProvinceID: 235, DistrictName: "Huyện Thanh Chương", … }
​​​
38: Object { DistrictID: 3290, ProvinceID: 229, DistrictName: "Huyện Thanh Ba", … }
​​​
39: Object { DistrictID: 3289, ProvinceID: 246, DistrictName: "Huyện Thạch An", … }
​​​
40: Object { DistrictID: 3288, ProvinceID: 235, DistrictName: "Huyện Tương Dương", … }
​​​
41: Object { DistrictID: 3287, ProvinceID: 225, DistrictName: "Huyện Tứ Kỳ", … }
​​​
42: Object { DistrictID: 3286, ProvinceID: 237, DistrictName: "Huyện Tuyên Hóa", … }
​​​
43: Object { DistrictID: 3284, ProvinceID: 260, DistrictName: "Huyện Tuy An", … }
​​​
44: Object { DistrictID: 3281, ProvinceID: 226, DistrictName: "Huyện Tiền Hải", … }
​​​
45: Object { DistrictID: 3279, ProvinceID: 262, DistrictName: "Huyện Tây Sơn", … }
​​​
46: Object { DistrictID: 3278, ProvinceID: 260, DistrictName: "Huyện Tây Hòa", … }
​​​
47: Object { DistrictID: 3276, ProvinceID: 211, DistrictName: "Huyện Tân Thạnh", … }
​​​
48: Object { DistrictID: 3275, ProvinceID: 212, DistrictName: "Huyện Tân Phước", … }
​​​
49: Object { DistrictID: 3273, ProvinceID: 211, DistrictName: "Huyện Tân Hưng", … }
​​​
50: Object { DistrictID: 3272, ProvinceID: 229, DistrictName: "Huyện Tam Nông", … }
​​​
51: Object { DistrictID: 3271, ProvinceID: 221, DistrictName: "Huyện Tam Đảo", … }
​​​
52: Object { DistrictID: 3270, ProvinceID: 242, DistrictName: "Huyện Sơn Tây", … }
​​​
53: Object { DistrictID: 3267, ProvinceID: 228, DistrictName: "Huyện Sơn Dương", … }
​​​
54: Object { DistrictID: 3266, ProvinceID: 266, DistrictName: "huyện Sốp Cộp", … }
​​​
55: Object { DistrictID: 3265, ProvinceID: 221, DistrictName: "Huyện Sông Lô", … }
​​​
56: Object { DistrictID: 3261, ProvinceID: 235, DistrictName: "Huyện Quỳ Châu", … }
​​​
57: Object { DistrictID: 3260, ProvinceID: 235, DistrictName: "Huyện Quế Phong", … }
​​​
58: Object { DistrictID: 3259, ProvinceID: 246, DistrictName: "Huyện Quảng Uyên", … }
​​​
59: Object { DistrictID: 3258, ProvinceID: 237, DistrictName: "Huyện Quảng Trạch", … }
​​​
60: Object { DistrictID: 3257, ProvinceID: 223, DistrictName: "Huyện Quảng Điền", … }
​​​
61: Object { DistrictID: 3255, ProvinceID: 201, DistrictName: "Huyện Phú Xuyên", … }
​​​
62: Object { DistrictID: 3254, ProvinceID: 262, DistrictName: "Huyện Phù Mỹ", … }
​​​
63: Object { DistrictID: 3250, ProvinceID: 220, DistrictName: "Huyện Phong Điền", … }
​​​
64: Object { DistrictID: 3249, ProvinceID: 245, DistrictName: "Huyện Pác Nặm", … }
​​​
65: Object { DistrictID: 3247, ProvinceID: 233, DistrictName: "Huyện Nho Quan", … }
​​​
66: Object { DistrictID: 3246, ProvinceID: 246, DistrictName: "Huyện Nguyên Bình", … }
​​​
67: Object { DistrictID: 3243, ProvinceID: 231, DistrictName: "Huyện Nghĩa Hưng", … }
​​​
68: Object { DistrictID: 3242, ProvinceID: 245, DistrictName: "Huyện Ngân Sơn", … }
​​​
69: Object { DistrictID: 3241, ProvinceID: 234, DistrictName: "Huyện Nga Sơn", … }
​​​
70: Object { DistrictID: 3238, ProvinceID: 225, DistrictName: "Huyện Ninh Giang", … }
​​​
71: Object { DistrictID: 3234, ProvinceID: 223, DistrictName: "Huyện Nam Đông", … }
​​​
72: Object { DistrictID: 3233, ProvinceID: 235, DistrictName: "Huyện Nam Đàn", … }
​​​
73: Object { DistrictID: 3232, ProvinceID: 245, DistrictName: "Huyện Na Rì", … }
​​​
74: Object { DistrictID: 3230, ProvinceID: 266, DistrictName: "Huyện Mường La", … }
​​​
75: Object { DistrictID: 3227, ProvinceID: 211, DistrictName: "Huyện Mộc Hóa", … }
​​​
76: Object { DistrictID: 3226, ProvinceID: 242, DistrictName: "Huyện Mộ Đức", … }
​​​
77: Object { DistrictID: 3224, ProvinceID: 237, DistrictName: "Huyện Minh Hóa", … }
​​​
78: Object { DistrictID: 3220, ProvinceID: 236, DistrictName: "Huyện Lộc Hà", … }
​​​
79: Object { DistrictID: 3218, ProvinceID: 250, DistrictName: "Thị xã Long Mỹ", … }
​​​
80: Object { DistrictID: 3217, ProvinceID: 210, DistrictName: "Huyện Lắk", … }
​​​
81: Object { DistrictID: 3216, ProvinceID: 234, DistrictName: "Huyện Lang Chánh", … }
​​​
82: Object { DistrictID: 3213, ProvinceID: 208, DistrictName: "Huyện Khánh Vĩnh", … }
​​​
83: Object { DistrictID: 3212, ProvinceID: 208, DistrictName: "Huyện Khánh Sơn", … }
​​​
84: Object { DistrictID: 3211, ProvinceID: 235, DistrictName: "Huyện Kỳ Sơn", … }
​​​
85: Object { DistrictID: 3205, ProvinceID: 233, DistrictName: "Huyện Kim Sơn", … }
​​​
86: Object { DistrictID: 3203, ProvinceID: 224, DistrictName: "Huyện Kiến Thụy", … }
​​​
87: Object { DistrictID: 3201, ProvinceID: 236, DistrictName: "Huyện Hương Sơn", … }
​​​
88: Object { DistrictID: 3200, ProvinceID: 216, DistrictName: "Thành phố Hồng Ngự", … }
​​​
89: Object { DistrictID: 3199, ProvinceID: 230, DistrictName: "Huyện Hoành Bồ", … }
​​​
90: Object { DistrictID: 3196, ProvinceID: 258, DistrictName: "Huyện Hàm Tân", … }
​​​
91: Object { DistrictID: 3194, ProvinceID: 246, DistrictName: "Huyện Hạ Lang", … }
​​​
92: Object { DistrictID: 3193, ProvinceID: 231, DistrictName: "Huyện Giao Thủy", … }
​​​
93: Object { DistrictID: 3191, ProvinceID: 233, DistrictName: "Huyện Gia Viễn", … }
​​​
94: Object { DistrictID: 3188, ProvinceID: 236, DistrictName: "Huyện Đức Thọ", … }
​​​
95: Object { DistrictID: 3186, ProvinceID: 260, DistrictName: "Huyện Đồng Xuân", … }
​​​
96: Object { DistrictID: 3185, ProvinceID: 230, DistrictName: "Thị xã Đông Triều", … }
​​​
97: Object { DistrictID: 3184, ProvinceID: 260, DistrictName: "Thị xã Đông Hòa", … }
​​​
98: Object { DistrictID: 3182, ProvinceID: 247, DistrictName: "Huyện Đình Lập", … }
​​​
99: Object { DistrictID: 3180, ProvinceID: 230, DistrictName: "Huyện Đầm Hà", … }

200: Object { DistrictID: 2109, ProvinceID: 230, DistrictName: "Huyện đảo Cô Tô", … }
​​​
201: Object { DistrictID: 2108, ProvinceID: 224, DistrictName: "Huyện đảo Cát Hải", … }
​​​
202: Object { DistrictID: 2107, ProvinceID: 224, DistrictName: "Huyện đảo Bạch Long Vĩ", … }
​​​
203: Object { DistrictID: 2106, ProvinceID: 209, DistrictName: "Huyện Đạ Tẻh", … }
​​​
204: Object { DistrictID: 2105, ProvinceID: 238, DistrictName: "Huyện Đa Krông", … }
​​​
205: Object { DistrictID: 2104, ProvinceID: 209, DistrictName: "Huyện Đạ Huoai", … }
​​​
206: Object { DistrictID: 2103, ProvinceID: 214, DistrictName: "Huyện Duyên Hải", … }
​​​
207: Object { DistrictID: 2101, ProvinceID: 207, DistrictName: "Huyện Chư Pưh", … }
​​​
208: Object { DistrictID: 2096, ProvinceID: 250, DistrictName: "Huyện Châu Thành", … }
​​​
209: Object { DistrictID: 2093, ProvinceID: 218, DistrictName: "Huyện Cù Lao Dung", … }
​​​
210: Object { DistrictID: 2091, ProvinceID: 214, DistrictName: "Huyện Cầu Kè", … }
​​​
211: Object { DistrictID: 2090, ProvinceID: 202, DistrictName: "Huyện Cần Giờ", … }
​​​
212: Object { DistrictID: 2087, ProvinceID: 267, DistrictName: "Huyện Cao Phong", … }
​​​
213: Object { DistrictID: 2086, ProvinceID: 214, DistrictName: "Huyện Càng Long", … }
​​​
214: Object { DistrictID: 2084, ProvinceID: 212, DistrictName: "Huyện Cai Lậy", … }
​​​
215: Object { DistrictID: 2081, ProvinceID: 215, DistrictName: "Huyện Bình Tân", … }
​​​
216: Object { DistrictID: 2079, ProvinceID: 266, DistrictName: "Huyện Bắc Yên", … }
​​​
217: Object { DistrictID: 2078, ProvinceID: 243, DistrictName: "Huyện Bắc Trà My", … }
​​​
218: Object { DistrictID: 2075, ProvinceID: 227, DistrictName: "Huyện Bắc Mê", … }
​​​
219: Object { DistrictID: 2073, ProvinceID: 269, DistrictName: "Huyện Bảo Thắng", … }
​​​
220: Object { DistrictID: 2070, ProvinceID: 234, DistrictName: "Huyện Bá Thước", … }
​​​
221: Object { DistrictID: 2066, ProvinceID: 230, DistrictName: "Thị xã Quảng Yên", … }
​​​
222: Object { DistrictID: 2065, ProvinceID: 221, DistrictName: "Thành phố Phúc Yên", … }
​​​
223: Object { DistrictID: 2064, ProvinceID: 229, DistrictName: "Thị xã Phú Thọ", … }
​​​
224: Object { DistrictID: 2063, ProvinceID: 263, DistrictName: "Thị xã Nghĩa Lộ", … }
​​​
225: Object { DistrictID: 2062, ProvinceID: 218, DistrictName: "Thị xã Ngã Năm", … }
​​​
226: Object { DistrictID: 2061, ProvinceID: 208, DistrictName: "Thị xã Ninh Hòa", … }
​​​
227: Object { DistrictID: 2060, ProvinceID: 265, DistrictName: "Thị xã Mường Lay", … }
​​​
228: Object { DistrictID: 2059, ProvinceID: 216, DistrictName: "Thị xã Hồng Ngự", … }
​​​
229: Object { DistrictID: 2058, ProvinceID: 219, DistrictName: "Thành phố Hà Tiên", … }
​​​
230: Object { DistrictID: 2057, ProvinceID: 212, DistrictName: "Thị xã Gò Công", … }
​​​
231: Object { DistrictID: 2056, ProvinceID: 225, DistrictName: "Thành phố Chí Linh", … }
​​​
232: Object { DistrictID: 2055, ProvinceID: 212, DistrictName: "Thị xã Cai Lậy", … }
​​​
233: Object { DistrictID: 2054, ProvinceID: 215, DistrictName: "Thị xã Bình Minh", … }
​​​
234: Object { DistrictID: 2053, ProvinceID: 227, DistrictName: "Huyện Yên Minh", … }
​​​
235: Object { DistrictID: 2052, ProvinceID: 227, DistrictName: "Huyện Xín Mần", … }
​​​
236: Object { DistrictID: 2051, ProvinceID: 244, DistrictName: "Huyện Võ Nhai", … }
​​​
237: Object { DistrictID: 2050, ProvinceID: 253, DistrictName: "Huyện Vĩnh Lợi", … }
​​​
238: Object { DistrictID: 2049, ProvinceID: 204, DistrictName: "Huyện Vĩnh Cửu", … }
​​​
239: Object { DistrictID: 2048, ProvinceID: 250, DistrictName: "Huyện Vị Thuỷ", … }
​​​
240: Object { DistrictID: 2047, ProvinceID: 263, DistrictName: "Huyện Văn Yên", … }
​​​
241: Object { DistrictID: 2046, ProvinceID: 268, DistrictName: "Huyện Văn Lâm", … }
​​​
242: Object { DistrictID: 2045, ProvinceID: 268, DistrictName: "Huyện Văn Giang", … }
​​​
243: Object { DistrictID: 2044, ProvinceID: 263, DistrictName: "Huyện Văn Chấn", … }
​​​
244: Object { DistrictID: 2043, ProvinceID: 269, DistrictName: "Huyện Văn Bàn", … }
​​​
245: Object { DistrictID: 2042, ProvinceID: 252, DistrictName: "Huyện U Minh", … }
​​​
246: Object { DistrictID: 2041, ProvinceID: 246, DistrictName: "Huyện Trùng Khánh", … }
​​​
247: Object { DistrictID: 2040, ProvinceID: 238, DistrictName: "Huyện Triệu Phong", … }
​​​
248: Object { DistrictID: 2039, ProvinceID: 263, DistrictName: "Huyện Trấn Yên", … }
​​​
249: Object { DistrictID: 2038, ProvinceID: 252, DistrictName: "Huyện Trần Văn Thời", … }
​​​
250: Object { DistrictID: 2037, ProvinceID: 218, DistrictName: "Huyện Trần Đề", … }
​​​
251: Object { DistrictID: 2036, ProvinceID: 247, DistrictName: "Huyện Tràng Định", … }
​​​
252: Object { DistrictID: 2035, ProvinceID: 240, DistrictName: "Thị xã Trảng Bàng", … }
​​​
253: Object { DistrictID: 2034, ProvinceID: 215, DistrictName: "Huyện Trà Ôn", … }
​​​
254: Object { DistrictID: 2033, ProvinceID: 214, DistrictName: "Huyện Trà Cú", … }
​​​
255: Object { DistrictID: 2032, ProvinceID: 266, DistrictName: "Huyện Thuận Châu", … }
​​​
256: Object { DistrictID: 2031, ProvinceID: 211, DistrictName: "Huyện Thủ Thừa", … }
​​​
257: Object { DistrictID: 2030, ProvinceID: 216, DistrictName: "Huyện Tháp Mười", … }
​​​
258: Object { DistrictID: 2029, ProvinceID: 229, DistrictName: "Huyện Thanh Sơn", … }
​​​
259: Object { DistrictID: 2028, ProvinceID: 213, DistrictName: "Huyện Thạnh Phú", … }
​​​
260: Object { DistrictID: 2027, ProvinceID: 232, DistrictName: "Huyện Thanh Liêm", … }
​​​
261: Object { DistrictID: 2026, ProvinceID: 216, DistrictName: "Huyện Thanh Bình", … }
​​​
262: Object { DistrictID: 2025, ProvinceID: 264, DistrictName: "Huyện Than Uyên", … }
​​​
263: Object { DistrictID: 2024, ProvinceID: 236, DistrictName: "Huyện Thạch Hà", … }
​​​
264: Object { DistrictID: 2023, ProvinceID: 262, DistrictName: "Huyện Tuy Phước", … }
​​​
265: Object { DistrictID: 2022, ProvinceID: 265, DistrictName: "Huyện Tuần Giáo", … }
​​​
266: Object { DistrictID: 2021, ProvinceID: 265, DistrictName: "Huyện Tủa Chùa", … }
​​​
267: Object { DistrictID: 2020, ProvinceID: 214, DistrictName: "Huyện Tiểu Cần", … }
​​​
268: Object { DistrictID: 2019, ProvinceID: 230, DistrictName: "Huyện Tiên Yên", … }
​​​
269: Object { DistrictID: 2018, ProvinceID: 268, DistrictName: "Huyện Tiên Lữ", … }
​​​
270: Object { DistrictID: 2017, ProvinceID: 264, DistrictName: "Huyện Tân Uyên", … }
​​​
271: Object { DistrictID: 2016, ProvinceID: 211, DistrictName: "Huyện Tân Trụ", … }
​​​
272: Object { DistrictID: 2015, ProvinceID: 229, DistrictName: "Huyện Tân Sơn", … }
​​​
273: Object { DistrictID: 2014, ProvinceID: 267, DistrictName: "Huyện Tân Lạc", … }
​​​
274: Object { DistrictID: 2013, ProvinceID: 216, DistrictName: "Huyện Tân Hồng", … }
​​​
275: Object { DistrictID: 2012, ProvinceID: 258, DistrictName: "Huyện Tánh Linh", … }
​​​
276: Object { DistrictID: 2011, ProvinceID: 216, DistrictName: "Huyện Tam Nông", … }
​​​
277: Object { DistrictID: 2010, ProvinceID: 264, DistrictName: "Huyện Tam Đường", … }
​​​
278: Object { DistrictID: 2009, ProvinceID: 221, DistrictName: "Huyện Tam Dương", … }
​​​
279: Object { DistrictID: 2008, ProvinceID: 215, DistrictName: "Huyện Tam Bình", … }
​​​
280: Object { DistrictID: 2007, ProvinceID: 266, DistrictName: "Huyện Sông Mã", … }
​​​
281: Object { DistrictID: 2006, ProvinceID: 264, DistrictName: "Huyện Sìn Hồ", … }
​​​
282: Object { DistrictID: 2005, ProvinceID: 269, DistrictName: "Thị xã Sa Pa", … }
​​​
283: Object { DistrictID: 2004, ProvinceID: 201, DistrictName: "Huyện Quốc Oai", … }
​​​
284: Object { DistrictID: 2003, ProvinceID: 243, DistrictName: "Huyện Quế Sơn", … }
​​​
285: Object { DistrictID: 2002, ProvinceID: 237, DistrictName: "Huyện Quảng Ninh", … }
​​​
286: Object { DistrictID: 2001, ProvinceID: 227, DistrictName: "Huyện Quang Bình", … }
​​​
287: Object { DistrictID: 2000, ProvinceID: 234, DistrictName: "Huyện Quan Sơn", … }
​​​
288: Object { DistrictID: 1999, ProvinceID: 227, DistrictName: "Huyện Quản Bạ", … }
​​​
289: Object { DistrictID: 1998, ProvinceID: 253, DistrictName: "Huyện Phước Long", … }
​​​
290: Object { DistrictID: 1997, ProvinceID: 246, DistrictName: "Huyện Phục Hòa", … }
​​​
291: Object { DistrictID: 1996, ProvinceID: 266, DistrictName: "Huyện Phù Yên", … }
​​​
292: Object { DistrictID: 1995, ProvinceID: 243, DistrictName: "Huyện Phú Ninh", … }
​​​
293: Object { DistrictID: 1994, ProvinceID: 229, DistrictName: "Huyện Phù Ninh", … }
​​​
294: Object { DistrictID: 1993, ProvinceID: 260, DistrictName: "Huyện Phú Hòa", … }
​​​
295: Object { DistrictID: 1992, ProvinceID: 205, DistrictName: "Huyện Phú Giáo", … }
​​​
296: Object { DistrictID: 1991, ProvinceID: 244, DistrictName: "Huyện Phú Bình", … }
​​​
297: Object { DistrictID: 1990, ProvinceID: 244, DistrictName: "Thị xã Phổ Yên", … }
​​​
298: Object { DistrictID: 1989, ProvinceID: 264, DistrictName: "Huyện Phong Thổ", … }
​​​
299: Object { DistrictID: 1988, ProvinceID: 242, DistrictName: "Huyện Nghĩa Hành", … }
        ]
        District::insert($data);
    }
}
