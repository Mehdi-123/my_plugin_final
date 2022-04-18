import React from 'react';
import img from '../assets/logo.png';


const Pack = () => {
    return (
        <div className="p-5">
            <p className="text-effyis-blue text-xl mb-6">Nos <span className="font-bold">packs</span> disponibles</p>
            {/* <img src={img} /> */}
            <div className="block md:flex md:justify-around">
                <div className="flex justify-center md:w-10/12">
                    <div className="bg-effyis-purple rounded-3xl transform transition duration-500 w-full py-4 px-6 hover:scale-105 shadow-3xl hover:shadow-4xl">
                        <p className="font-normal text-2xl text-white text-center">Pack Or</p>
                        <p className="font-bold text-4xl text-white text-center my-4">39.99€ / mois</p>
                        <div class="relative flex w-20 pt-4 pb-6">
                            <div class="flex-grow border-t-8 rounded-xl border-effyis-azure"></div>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <p>Service 1</p>
                            </div>
                            <p><span className="font-medium">200€</span> - <span className="font-medium">2 fois</span> / jour</p>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <p>Service 2</p>
                            </div>
                            <p><span className="font-medium">150€</span> - <span className="font-medium">4 fois</span> / jour</p>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <p>Service 3</p>
                            </div>
                            <p><span className="font-medium">150€</span> - <span className="font-medium">4 fois</span> / jour</p>
                        </div>
                        <div className="pb-2 pt-6 flex justify-center">
                            <a href="#" className="w-60 px-4 py-3 text-center text-white bg-effyis-azure rounded-lg font-bold text-sm">Ajouter au panier</a>
                        </div>
                    </div>
                </div>    


                <div className="flex justify-center md:w-10/12 md:mx-5 md:mt-0 mt-7">
                    <div className="bg-effyis-blue rounded-3xl transform transition duration-500 w-full py-4 px-6 hover:scale-105 shadow-3xl hover:shadow-4xl">
                        <p className="font-normal text-2xl text-white text-center">Pack Argent</p>
                        <p className="font-bold text-4xl text-white text-center my-4">29.99€ / mois</p>
                        <div class="relative flex w-20 pt-4 pb-6">
                            <div class="flex-grow border-t-8 rounded-xl border-effyis-purple"></div>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <p>Service 1</p>
                            </div>
                            <p><span className="font-medium">200€</span> - <span className="font-medium">2 fois</span> / jour</p>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <p>Service 2</p>
                            </div>
                            <p><span className="font-medium">150€</span> - <span className="font-medium">4 fois</span> / jour</p>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <p>Service 3</p>
                            </div>
                            <p><span className="font-medium">150€</span> - <span className="font-medium">4 fois</span> / jour</p>
                        </div>
                        <div className="pb-2 pt-6 flex justify-center">
                            <a href="#" className="w-60 px-4 py-3 text-center text-white bg-effyis-purple rounded-lg font-bold text-sm">Ajouter au panier</a>
                        </div>
                    </div>
                </div>


            <div className="flex justify-center md:w-10/12 md:mt-0 mt-7">
                    <div className="bg-effyis-purple rounded-3xl transform transition duration-500 w-full py-4 px-6 hover:scale-105 shadow-3xl hover:shadow-4xl">
                        <p className="font-normal text-2xl text-white text-center">Pack Bronze</p>
                        <p className="font-bold text-4xl text-white text-center my-4">19.99€ / mois</p>
                        <div class="relative flex w-20 pt-4 pb-6">
                            <div class="flex-grow border-t-8 rounded-xl border-effyis-azure"></div>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <p>Service 1</p>
                            </div>
                            <p><span className="font-medium">200€</span> - <span className="font-medium">2 fois</span> / jour</p>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <p>Service 2</p>
                            </div>
                            <p><span className="font-medium">150€</span> - <span className="font-medium">4 fois</span> / jour</p>
                        </div>
                        <div className="flex justify-between py-1 font-thin text-lg text-white">
                            <div className="flex justify-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <p>Service 3</p>
                            </div>
                            <p><span className="font-medium">150€</span> - <span className="font-medium">4 fois</span> / jour</p>
                        </div>
                        <div className="pb-2 pt-6 flex justify-center">
                            <a href="#" className="w-60 px-4 py-3 text-center text-white bg-effyis-azure rounded-lg font-bold text-sm">Ajouter au panier</a>
                        </div>
                    </div>
                </div>   

                </div>

        </div>
    );
}

export default Pack;
