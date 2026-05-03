# Vivid+Co — Refero Style

- Refero URL: https://styles.refero.design/style/8875b14e-c59a-492f-8780-8027a480f21c
- Site URL: https://vividand.co
- ID: 8875b14e-c59a-492f-8780-8027a480f21c
- Theme: dark
- Industry: agency
- Created: 2026-04-30T02:36:27.001Z
- Ranks: newest: 338, popular: 1000, trending: 881

> Midnight refractography. A dark, expansive canvas lit by precise typography and spectral light refractions.

## Description

Vivid+Co employs a command-center dark theme, focusing on high contrast and dramatic impact. Large, confident typography dominates the layout, using subtle letter-spacing adjustments to control visual flow. The absence of strong chromatic accents outside of a single, muted gray for functional elements keeps the aesthetic clean and focused, punctuated by the refractive visuals. Components are minimalist, relying on precise typography and ghost-like interactive states rather than heavy fills or shadows.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Ink | #000000 | neutral | Page backgrounds, decorative fills for icons and illustrations, establishing high contrast for primary text |
| Refined White | #fffdf9 | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Stonewash Gray | #6f879c | accent | Muted text, hairline borders for ghost buttons and interactive elements, providing a subtle interactive cue without drawing strong attention to itself |
| Outline Gray | #403f3f | neutral | Subtle borders and dividers, indicating secondary separation or structure |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Montreal | Inter | 400, 700 | 14px, 15px, 17px, 18px, 20px, 21px, 22px, 32px, 33px, 36px, 56px, 105px, 136px | 1.00, 1.01, 1.13, 1.17, 1.20, 1.24, 1.50 | This custom sans-serif is the sole typeface, used for all textual elements. Its wide range of weights and sizes, combined with precise, often negative, letter-spacing in larger headlines, creates a feeling of meticulous design and clear statement, rather than decorative flair. It's concise and impactful. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.5 | 0.28 |
| body | 17 | 1.5 | 0.17 |
| subheading | 32 | 1.24 | 0.32 |
| heading | 36 | 1.17 | 0.36 |
| heading-lg | 56 | 1.13 | -0.56 |
| display | 136 | 1 | -2.72 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "15px",
    "default": "0px",
    "navItems": "5px"
  },
  "elementGap": "7px",
  "sectionGap": "108px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link (Active)

**Role:** Primary navigation item, active state

Text: Neue Montreal, 15px, Refined White (#fffdf9), weight 400. Has a 0px border-radius, `padding-top: 9px`, `padding-bottom: 9px`, and a 1px solid bottom border in Refined White.

### Navigation Link (Default)

**Role:** Primary navigation item, default state

Text: Neue Montreal, 15px, Refined White (#fffdf9), weight 400. No visible border.

### Ghost Button (Primary Action)

**Role:** Call-to-action button, outlined style

Text: Neue Montreal, size derived from context, Stonewash Gray (#6f879c), weight 400. No background, transparent `padding-top: 20px`, `padding-bottom: 30px`, with a 1px solid border in Stonewash Gray (#6f879c). No border radius for a sharp, modern edge.

### Text Button (Subtle)

**Role:** Secondary action or categorized link

Text: Neue Montreal, size derived from context, Refined White (#fffdf9), weight 400. Transparent background, `padding-top: 0`, `padding-bottom: 0`. No border, 0px border-radius.

### Feature Card

**Role:** Container for content blocks

Implicit card structure, has a 15px border-radius. Padding is `20px` in some contexts. No explicit background color change from canvas, relies on content and typography for definition.

## Do's

- Prioritize Canvas Ink (#000000) for all main backgrounds to maintain the dark, dramatic aesthetic.
- Use Refined White (#fffdf9) exclusively for primary text and high-visibility interactive elements like navigation.
- Apply Stonewash Gray (#6f879c) for ghost button borders and subtle text, reserving it for functional yet understated elements.
- Utilize Neue Montreal universally across all text, carefully applying its range of weights and the corresponding letter-spacing tokens for visual hierarchy.
- Maintain the 0px border-radius for buttons and most structural elements to uphold a sharp, angular design language, only using 15px for distinct card-like containers and 5px for very specific interactive elements.
- Ensure large headlines employ negative letter-spacing (-0.0200em at 136px, -0.0100em at 56px) for a tight, impactful appearance.
- Implement motion with `ease` timing functions and durations of `0.5s` for smooth visual transitions, particularly for `transform` and `opacity` properties.

## Don'ts

- Do not introduce additional saturated colors; maintain the monochrome palette with Stonewash Gray as the only chromatic accent.
- Avoid box-shadows or significant elevation; the design relies on flat surfaces and high contrast for definition.
- Do not use generic system fonts; Neue Montreal is critical for brand personality.
- Don't use large positive letter-spacing for headlines; it will diminish the brand's distinct tight typographic style.
- Avoid visual dividers between content sections; rely on generous vertical spacing (`108px` section gap) to separate content blocks.
- Do not vary border radii arbitrarily; stick to 0px, 5px, or 15px as specified for their respective contexts.
- Do not add heavy background fills to buttons; they should remain ghost-like or text-only to preserve the lightweight feel.

## Layout

The page operates on a full-bleed model with content primarily centered, featuring a maximum width for body text but allowing hero sections and atmospheric graphics to extend edge-to-edge. The hero section is a full-viewport dark background with large, centered headlines and associated body text. Vertical rhythm is established through significant section gaps of `108px`. Content often appears in alternating single-column centered stacks or implied two-column text+visual arrangements without explicit grid lines. The navigation is a fixed top bar with minimalist links.

## Imagery

The site uses abstract, photorealistic 3D renders of translucent, refractive geometric objects (cubes) as its primary visual motif. These visuals are full-bleed on a dark background, often with lens flare effects, creating spectral light and color shifts within the objects themselves, but not introducing broader chromatic elements into the UI. Imagery serves a decorative, atmospheric role, representing complexity and precision without being literal. Icons are minimalist, typically white outlines or fills, maintaining the high-contrast monochromatic UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Huge Inc | Dark UI, large dramatic typography, and minimal use of color accents with atmospheric abstract visuals. |
| ACNE | High-impact, full-screen dark visuals with bold, often oversized and tightly tracked typography. |
| Basic/Dept | Elegant dark themes with a focus on refined typography and subtle interactive states, minimal use of strong colors. |
| Work & Co | Employs full-bleed dramatic visuals and a clean typographic hierarchy over a predominantly dark background. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #fffdf9
background: #000000
border: #6f879c
accent: #6f879c
primary action: #6f879c (outlined action border)

Example Component Prompts:
1. Create a hero section: Canvas Ink (#000000) full-bleed background. Centered headline 'We are Marketers' in Refined White (#fffdf9), Neue Montreal, 136px, weight 700, letter-spacing -2.72px. Below it, add body text 'A full-service agency and strategic advisor partnering with visionaries to solve their toughest challenges.' in Refined White (#fffdf9), Neue Montreal, 22px, weight 400, line height 1.24, centered, max-width appropriate for readability.
2. Design a ghost button labeled 'Learn More': Neue Montreal, 17px, weight 400, Stonewash Gray (#6f879c) text and 1px solid border, `padding-top: 20px`, `padding-bottom: 30px`, 0px border-radius, Canvas Ink (#000000) background. No box shadow.
3. Implement a navigation item 'Expertise': Refined White (#fffdf9) text, Neue Montreal, 15px, weight 400, 0px border-radius, opacity 0.7 on hover. No background. `padding-top: 9px`, `padding-bottom: 9px`.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516565104-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516565104-thumb.jpg |
