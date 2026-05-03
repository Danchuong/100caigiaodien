# Gsap — Refero Style

- Refero URL: https://styles.refero.design/style/00537a20-e99e-4ef2-b119-c6f532c44cc9
- Site URL: https://gsap.com
- ID: 00537a20-e99e-4ef2-b119-c6f532c44cc9
- Theme: dark
- Industry: devtools
- Created: 2026-04-30T00:38:00.249Z
- Ranks: newest: 744, popular: 260, trending: 165

> Midnight kinetic canvas

## Description

GSAP uses a dynamic 'dark playground' aesthetic, where a deep black canvas provides a dramatic stage for vibrant, evolving highlight colors and bold, unconventional typography. The system emphasizes clear content hierarchy through stark contrast, with interactive elements outlined in subtle, near-white tones rather than filled. The overall impression is one of sophisticated, high-performance tooling for creative animation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #0e100f | neutral | Page background, primary surface color, neutral text on bright surfaces |
| Frosted Canvas | #fffce1 | neutral | Primary text, outlined button borders, key interactive elements, secondary surface color for contrast |
| Faded Steel | #7c7c6f | neutral | Muted text, secondary navigation items, subtle borders, inactive icons |
| Deep Graphite | #42433d | neutral | Delineators and subtle borders on Frosted Canvas surfaces |
| Neon Pink | #fec5fb | brand | Decorative accents, text highlights, graphic elements, section dividers |
| Fiery Orange | #ff8709 | brand | Decorative accents, text highlights, graphic elements |
| Shocking Green | #0ae448 | brand | Green outline accent for tags, dividers, and focused UI edges; Used for hero banners and vibrant background fills, signifying energy and dynamism |
| Digital Violet | #9d95ff | brand | Decorative accents, text highlights, graphic elements |
| Aqua Glow | #00bae2 | brand | Decorative accents, text highlights, graphic elements |
| Mint Burst | #abff84 | brand | Decorative accents, text highlights, graphic elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Mori | system-ui, sans-serif | 400, 600 | 14px, 16px, 17px, 18px, 19px, 20px, 21px, 23px, 24px, 32px, 33px, 34px, 40px, 44px, 66px, 76px, 89px, 101px, 224px | 1.00, 1.05, 1.15, 1.20, 1.38, 1.40 | All text roles: headings, body copy, navigation, buttons. Its geometric sans-serif shapes and precise tracking define the brand's sharp, technical yet playful voice, especially at large display sizes with significant negative tracking. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.4 | -0.14 |
| body-sm | 16 | 1.4 | -0.16 |
| body | 18 | 1.4 | -0.18 |
| subheading | 24 | 1.38 | -0.24 |
| heading-sm | 32 | 1.2 | -0.64 |
| heading | 44 | 1.15 | -0.88 |
| heading-lg | 66 | 1.05 | -1.32 |
| display | 224 | 0.9 | -4.48 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "100px",
    "buttons": "100px",
    "default": "8px",
    "dividers": "1px"
  },
  "elementGap": "16px",
  "sectionGap": "34px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Pill Ghost Button

**Role:** Primary action button

Text in Frosted Canvas (#fffce1), with a Frosted Canvas border (#fffce1) of 1px, and a 100px border-radius, giving it a pill shape. Padding is 15px vertical, 24px horizontal. No background fill.

### Text Only Button

**Role:** Secondary action or navigation link

Text in Faded Steel (#7c7c6f), with no border or background. Padding is 16px vertical, 0px horizontal. Typically used for internal navigation or less prominent actions.

### Icon Only Button

**Role:** Tertiary action or purely decorative icon button

Frosted Canvas (#fffce1) icon, with no border or background, and a 50% border-radius for a circular shape. Zero padding, used mainly for functional icons rather than text labels.

### Internal Link Nav Item

**Role:** Navigation links

Text in Frosted Canvas (#fffce1), no background, no border, uses 100px border radius for its hit area. Padding 15px vertically, 24px horizontally.

### Branded Section Card

**Role:** Container for product features or content sections

Background is Absolute Zero (#0e100f). Features an 8px border-radius, with varying accent border colors like Neon Pink or Fiery Orange, and a 2px stroke. Internal padding of 16px.

## Do's

- Use Absolute Zero (#0e100f) as the default background for all pages and primary content sections.
- Prioritize Frosted Canvas (#fffce1) for all primary text and interactive elements to ensure high contrast on dark backgrounds.
- Apply Mori font with variable letter-spacing, using the tighter tracking values for larger display text (e.g., -0.0200em for 224px display text) and standard tracking for body copy.
- Employ the 100px border-radius for all primary buttons and navigation items to maintain a distinct pill-shaped interactive element.
- Integrate brand accent colors (Neon Pink, Fiery Orange, Shocking Green, Digital Violet, Aqua Glow, Mint Burst) in graphical elements, animated components, and section highlights using 2px borders.
- Maintain a comfortable density with element gaps typically at 16px, and card padding at 16px for content blocks.
- Outline interactive elements like buttons and input fields rather than filling them, using Frosted Canvas (#fffce1) for borders to keep the primary background clean.

## Don'ts

- Avoid using solid background fills for primary action buttons; instead, opt for outlined styles with Frosted Canvas borders.
- Do not introduce new color palettes; stick to the defined brand accents and neutral scale.
- Never use generic square or rounded-square buttons; all primary interactive elements should leverage the 100px border-radius for the signature pill shape.
- Resist adding unnecessary elevation or shadows; the design relies on flat surfaces and vibrant color outlines for visual interest.
- Do not deviate from the Mori font or introduce other font families; all textual content must use Mori to maintain brand consistency.
- Avoid overly bright or light background sections; the design system is anchored in a dark theme where brighter elements serve as accents.
- Do not use generic gray text for headlines or section titles; they should always be Frosted Canvas (#fffce1) or a specific brand accent color for emphasis.

## Similar Brands

| Business | Why |
| --- | --- |
| Framer | Fluid, interactive dark UI with a focus on animation and dynamic elements, using bold typography. |
| Lumen5 | Prominent use of dark backgrounds with bright, colorful highlights in illustrations and UI elements. |
|  spline.design | Emphasis on 3D/abstract graphics and a darker UI to highlight creative tools. |
| Webflow | Clean, contemporary design with a strong focus on typography and subtle interactive elements on a dark canvas, often with a hint of energetic accents. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #fffce1
background: #0e100f
border: #7c7c6f
accent: #0ae448
primary action: no distinct CTA color

3-5 Example Component Prompts:
1. Create a hero section: Absolute Zero (#0e100f) background. Headline 'Animate Anything' at 224px Mori 600, Frosted Canvas (#fffce1), letter-spacing -4.48px. Beneath, add a Pill Ghost Button 'Get GSAP' with Frosted Canvas (#fffce1) text, 1px Frosted Canvas (#fffce1) border, 100px border-radius, 15px vertical padding, 24px horizontal padding.
2. Design a feature card: Absolute Zero (#0e100f) background, 8px border-radius. Use Neon Pink (#fec5fb) as a 2px border accent. Subheading 'Scroll' at 32px Mori 600, Frosted Canvas (#fffce1), letter-spacing -0.64px. Body text 'Turn scrolling into silky-smooth storytelling.' at 18px Mori 400, Frosted Canvas (#fffce1). Add a Text Only Button 'Explore Scroll' with Faded Steel (#7c7c6f) text.
3. Create a header navigation: Absolute Zero (#0e100f) background. Left logo 'GSAP' in Frosted Canvas (#fffce1). Main navigation links 'Tools', 'Showcase', 'Community', 'Learn GSAP', 'Docs', 'Demos' as Text Only Buttons with Faded Steel (#7c7c6f) text. Right-aligned Pill Ghost Button 'Get GSAP' with Frosted Canvas (#fffce1) text, 1px Frosted Canvas (#fffce1) border, 100px border-radius, 15px vertical padding, 24px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509454607-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509454607-thumb.jpg |
