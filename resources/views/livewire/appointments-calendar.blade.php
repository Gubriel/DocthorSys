<div class="flex flex-wrap justify-between">
    <div x-data="calendar()" class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="flex items-center justify-between py-2 px-6">
                <div>
                    <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                    <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                </div>
                <div class="space-x-1">
                    <button
                            type="button"
                            class="inline-flex items-center justify-center rounded-full h-6 w-6 transition duration-150 ease-in-out bg-gray-200 hover:bg-gray-300 focus:outline-none"
                            :class="{ 'cursor-not-allowed opacity-25': month == 0 }"
                            :disabled="month == 0 ? true : false"
                            @click="month--; getNoOfDays()">
                        <svg class="h-4 w-4 text-gray-500 inline-flex" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 1.414L6.414 10H14a1 1 0 110 2H6.414l1.293 1.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button
                            type="button"
                            class="inline-flex items-center justify-center rounded-full h-6 w-6 transition duration-150 ease-in-out bg-gray-200 hover:bg-gray-300 focus:outline-none"
                            :class="{ 'cursor-not-allowed opacity-25': month == 11 }"
                            :disabled="month == 11 ? true : false"
                            @click="month++; getNoOfDays()">
                        <svg class="h-4 w-4 text-gray-500 inline-flex" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L13.586 10H6a1 1 0 110-2h7.586l-1.293-1.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="-mx-1 -mb-2 flex flex-wrap justify-between bg-gray-50 border-b border-gray-100 rounded-t">

                <template x-for="(day, index) in DAYS" :key="index">
                    <div style="width: calc(100% /7)" class="px-2 py-2 text-gray-500 text-sm leading-none text-center uppercase tracking-wide">{{ day }}</div>
                </template>

            </div>

            <div class="-mx-1 -mb-1">
                <template x-for="blankday in blankdays">
                    <div
                            style="width: calc(100% /7)"
                            class="text-center border-t border-r border-b text-sm h-auto leading-none text-gray-400"></div>
                </template>
                <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                    <div style="width: calc(100% /7)" class="px-4 pt-2 pb-4 text-center border-t border-r border-b text-sm leading-none">
                    <span
                            @click="getDateValue(date)"
                            x-text="date"
                            class="cursor-pointer leading-none hover:bg-blue-200"
                            :class="{ 'bg-blue-200': isToday(date) }"></span>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <script src="//unpkg.com/alpinejs" defer></script>

    <script>
        function calendar() {
            return {
                month: '',
                year: '',
                no_of_days: [],
                blankdays: [],
                DAYS: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
                MONTH_NAMES: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],

                initMonth() {
                    let today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.getNoOfDays();
                },

                isToday(date) {
                    let today = new Date();
                    let d = new Date(this.year, this.month, date);
                    return today.toDateString() === d.toDateString() ? true : false;
                },

                getNoOfDays() {
                    let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
                    let dayOfWeek = new Date(this.year, this.month).getDay();
                    let blankdaysArray = [];
                    for (var i=1; i <= dayOfWeek; i++) {
                        blankdaysArray.push(i);
                    }
                    let daysArray = [];
                    for (var i=1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }
                    this.blankdays = blankdaysArray;
                    this.no_of_days = daysArray;
                },

                getDateValue(date) {
                    // Your implementation for what should happen when a date is clicked
                    console.log(date);
                }
            }
        }
    </script>
    <script>
        function calendar() {
            return {
                month: '',
                year: '',
                no_of_days: [],
                blankdays: [],
                DAYS: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
                MONTH_NAMES: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],

                initMonth() {
                    let today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.getNoOfDays();
                },

                isToday(date) {
                    let today = new Date();
                    let d = new Date(this.year, this.month, date);
                    return today.toDateString() === d.toDateString() ? true : false;
                },

                getNoOfDays() {
                    let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
                    let dayOfWeek = new Date(this.year, this.month).getDay();
                    let blankdaysArray = [];
                    for (var i=1; i <= dayOfWeek; i++) {
                        blankdaysArray.push(i);
                    }
                    let daysArray = [];
                    for (var i=1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }
                    this.blankdays = blankdaysArray;
                    this.no_of_days = daysArray;
                },

                getDateValue(date) {
                    // Your implementation for what should happen when a date is clicked
                    console.log(date);
                }
            }
        }
    </script>

</div>
