import { useEffect, useRef, useState } from "react";

const HeroSlider = ({ sliders, interval = 5000 }) => {
  const [current, setCurrent] = useState(0);
  const timeoutRef = useRef();

  useEffect(() => {
    timeoutRef.current = setTimeout(() => {
      setCurrent((prev) => (prev + 1) % sliders.length);
    }, interval);
    return () => clearTimeout(timeoutRef.current);
  }, [current, sliders.length, interval]);

  return (
    <div className="absolute inset-0 z-0">
      <div className="absolute inset-0 bg-slate-900/40 z-10"></div>
      <div className="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/20 z-10"></div>
      {sliders.map((slider, index) => (
        <div
          key={index}
          className={`absolute inset-0 transition-opacity duration-1000 ${
            index === current ? "opacity-100" : "opacity-0"
          }`}
        >
          <img
            src={slider.img}
            className="w-full h-full object-cover"
            alt={`Banner ${index + 1}`}
          />
        </div>
      ))}
    </div>
  );
};

export default HeroSlider;
