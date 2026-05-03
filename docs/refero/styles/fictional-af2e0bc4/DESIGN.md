# Fictional — Refero Style

- Refero URL: https://styles.refero.design/style/af2e0bc4-ef1c-4365-a25d-00b691218431
- Site URL: https://fictional-typeface.com
- ID: af2e0bc4-ef1c-4365-a25d-00b691218431
- Theme: light
- Industry: design
- Created: 2026-04-30T02:12:52.946Z
- Ranks: newest: 418, popular: 86, trending: 58

> Whimsical Sticker Bomb

## Description

The Fictional design system embodies a playful and energetic aesthetic, reminiscent of a vibrant children's book. It leverages a lively palette of saturated brand colors against a warm, neutral background. Typography is central to the visual identity, using a custom font that radiates personality. Components feature rounded, often irregular shapes, minimal shadows, and bold color accents, creating an approachable and whimsical user experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Almond | #ffe9ce | neutral | Main page background — a warm, inviting canvas for playful elements |
| Paper White | #ffffff | neutral | Card surfaces, speech bubbles, primary text on dark backgrounds, ghost button borders |
| Type Black | #000000 | neutral | Primary text, prominent headings, strong outlines, and decorative fills |
| Grape Punch | #8a53ff | brand | Card backgrounds, section separators, bringing a playful and energetic accent |
| Bubblegum Red | #fd4b38 | brand | Spot illustrations, card backgrounds, accentuating elements with vibrant energy |
| Sunshine Yellow | #ffd80c | accent | Card backgrounds, decorative fills, button hover states, expressing cheerfulness |
| Leafy Green | #3ccb09 | accent | Card backgrounds, small highlight elements, used sparingly for a fresh pop |
| Deep Indigo | #0500a3 | accent | Decorative text outlines and accent strokes, providing depth without heaviness |
| Ash Gray | #666666 | neutral | Secondary text, link borders, subtler interface elements |
| Light Gray | #dddddd | neutral | Muted button backgrounds and subtle dividers |
| Input Gray | #101010 | neutral | Input text and borders |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Fictional | Comic Sans MS | 400 | 16px, 22px, 29px, 36px, 37px, 40px, 43px, 48px, 50px, 72px, 115px, 202px, 346px | 0.90, 1.00, 1.10, 1.20, 1.30, 1.40, 1.67, 1.71, 1.88 | The primary and only typeface, designed to be quirky and highly expressive. Its wide range of sizes and single weight imply a focus on visual impact over traditional typographic hierarchy, with stylistic alternates for a custom feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 16 | 1.71 |  |
| body | 22 | 1.4 |  |
| subheading | 29 | 1.3 |  |
| heading-sm | 36 | 1.2 |  |
| heading | 48 | 1.2 |  |
| heading-lg | 72 | 1.1 |  |
| display | 346 | 0.9 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "15px",
    "buttons": "5px",
    "speechBubbles": "144px"
  },
  "elementGap": "12px",
  "sectionGap": "30px",
  "cardPadding": "29px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive elements with minimal visual footprint, relying on text and soft borders.

Transparent background, Paper White text, Paper White 5px rounded border. No padding specified, implying text-only. Used for navigation and internal links.

### Speech Bubble Card

**Role:** Informative elements or callouts, designed with a hand-drawn, cartoonish feel.

Paper White background, with an exaggerated 144px border-radius, giving it a speech bubble shape. Internal padding of 28.8px vertical and 43.2px horizontal. No shadow.

### Colorful Round Card

**Role:** Highlighting key features or interactive elements, often with vivid colors.

Features a 100% border-radius for a perfect circle shape, with color fills like Grape Punch, Leafy Green. Padding is often asymmetrical or zero depending on content. No shadow.

### Accent Filled Button

**Role:** Secondary action buttons or tags, visually distinct from ghost buttons.

Light Gray background, Type Black text, 15px border-radius for moderately rounded corners. No padding specified, implying text-only. Used for labels like 'T'.

### Interactive Input

**Role:** Basic text input field allowing user data entry.

Transparent background, Input Gray text, Input Gray 0px border. No padding specified. A simple, unobtrusive input style.

### Quirky Card

**Role:** Containers for content, using a variety of vibrant brand colors with a consistent rounded edge.

Backgrounds in Grape Punch, Sunshine Yellow, Bullet Red, Leafy Green. Features a 15px border-radius. Internal padding of 8px on all sides. No shadow.

### Callout Label (Red)

**Role:** Small, urgent, or promotional tags, drawing immediate attention.

Bubblegum Red background with Paper White text. Rectangular with 15px border-radius. Used for 'GET IT HERE' or 'FREE TRIAL AVAILABLE'.

## Do's

- Always use the Fictional typeface for all text elements to maintain brand personality.
- Utilize Canvas Almond (#ffe9ce) as the primary page background color for a warm, inviting foundation.
- Apply a 15px border-radius for general cards and rectangular accent elements, reserving 5px for smaller buttons and 144px for speech bubble shapes.
- Employ Type Black (#000000) for all primary text content to ensure high contrast against light backgrounds.
- Incorporate vibrant accent colors like Grape Punch (#8a53ff), Sunshine Yellow (#ffd80c), and Bubblegum Red (#fd4b38) for card backgrounds and highlight elements to create visual energy and playfulness.
- Space elements using multiples of the 6px base unit, with a preference for `elementGap` of 12px for tight clusters and `cardPadding` of 29px for content blocks.
- Use ghost buttons with Paper White text and borders for navigation and secondary actions to maintain a light, non-obtrusive interface.

## Don'ts

- Avoid using traditional box-shadows; instead, rely on vibrant background colors and irregular shapes for element definition.
- Do not introduce additional font families; the Fictional typeface is the sole typographic voice of the brand.
- Refrain from using heavily structured grid layouts; allow elements to be positioned more organically, like 'sticker bombing'.
- Do not use dark, desaturated colors as primary background elements; the system thrives on a light, warm canvas with vivid accents.
- Avoid strictly symmetrical or rigid component designs; embrace rounded corners and slightly irregular forms.
- Never use generic blue for primary interactive elements; leverage the brand's vibrant palette, especially Grape Punch, Leafy Green, or Bubblegum Red.
- Do not apply padding to ghost buttons; they should appear as text-only interactive elements framed by their borders.

## Layout

The page layout is full-bleed, extending content to the edges, creating an expansive feel. The hero section is characterized by a central, oversized headline on the Canvas Almond background, surrounded by 'sticker-bombed' accent cards and speech bubbles. Sections then alternate between full-width colored blocks and more contained multi-column arrangements. Vertical spacing is generous, leveraging sectionGap of 30px, giving visual elements ample breathing room, contributing to a spacious, non-dense feel. Navigation appears as simple ghost buttons, often minimal and contextual.

## Imagery

The site primarily uses iconography and stylistic text as its visual language, rather than traditional imagery. Icons are filled, mono-color, and often appear within circular or starburst shapes. Text itself is treated as a major visual element, with large, expressive characters. Illustrations include speech bubbles and starbursts, filled with solid brand colors, conveying a playful, sticker-like aesthetic. There are no photographs or complex 3D renders; all visuals are graphic and flat, serving to amplify the typeface's friendly and quirky character. Imagery is used decoratively, enhancing the overall cheerful and cartoonish atmosphere.

## Similar Brands

| Business | Why |
| --- | --- |
| Playful typefoundries (e.g. Typewolf's more whimsical selections) | Focus on highly expressive, often irregular display typefaces as the core visual identity, leveraging them as graphic elements. |
| Children's book websites | Bright, high-saturation color palettes, rounded shapes, and a general atmosphere of whimsy and accessibility. |
| Certain indie game studios | Use of 'sticker bomb' aesthetics with layered, colorful, and irregularly shaped graphic elements against a softer background. |
| Marketing for 'fun' consumer products | Vibrant colors, bold typography, and a lack of harsh shadows/sharp angles to convey an approachable and energetic brand. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffe9ce
border: #ffffff
accent: #8a53ff
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section with 'Fictional' as the main headline: use Canvas Almond (#ffe9ce) background. Headline 'Fictional' is Type Black (#000000) using Fictional font at 346px, with a 0.9 lineHeight. Overlay a circular accent card behind 'NEW!' with Leafy Green (#3ccb09) background and Paper White text at 16px Fictional. This card should have a 100% border-radius and 8px padding.
2. Design a feature block: Full-width section with Grape Punch (#8a53ff) background. Display 'Fictional Light' as a heading (Fictional font, 48px, Paper White text, 1.2 lineHeight). Center this text vertically.
3. Create an informational speech bubble: Paper White (#ffffff) background with exaggerated 144px border-radius, 28.8px vertical and 43.2px horizontal padding. Body text 'A friendly & quirky typeface' in Type Black (#000000) at 22px Fictional, 1.4 lineHeight.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515147387-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515147387-thumb.jpg |
