# Itsnicethat — Refero Style

- Refero URL: https://styles.refero.design/style/3e70af05-a07f-4c11-98ca-6ecb4765e967
- Site URL: https://itsnicethat.com
- ID: 3e70af05-a07f-4c11-98ca-6ecb4765e967
- Theme: light
- Industry: media
- Created: 2026-02-20T13:19:35.000Z
- Ranks: newest: 1157, popular: 340, trending: 524

> Artist's sketchbook, bursting with vibrant scraps and precise typography.

## Description

This design system feels like a carefully curated art zine, balancing disciplined, editorial typography with unexpected splashes of vivid, almost childlike color. The overall impression is one of approachable creativity and intellectual curiosity. Sharp corners dominate the UI, making the few instances of extreme roundedness (75px) feel like deliberate, playful exceptions. This tension between strict layout and spontaneous color creates a dynamic, engaging experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Black Ink | #2b2b2b | neutral | Primary text, main headings, icons, borders – creates a sharp, authoritative presence against the light background. |
| Pure White | #ffffff | neutral | Page backgrounds, card surfaces, button text – the dominant canvas for content. |
| Frost Gray | #f0efef | neutral | Subtle background for badges and secondary elements, offering a softer lift than Pure White. |
| Medium Gray | #676767 | neutral | Secondary text, less prominent borders and icons, receding slightly from Black Ink. |
| Muted Taupe | #faead9 | neutral | Background for specific content blocks, providing a warm, subtle shift. |
| Electric Purple | #8147ff | brand | Primary brand accent, used for prominent interactive elements like call-to-action buttons – vibrant and energetic. |
| Sunshine Yellow | #ffd519 | accent | Secondary accent for interactive elements and highlighted content – adds a warm, optimistic pop. |
| Deep Indigo | #6219ff | accent | Prominent links, suggesting interactivity - a slightly darker, more saturated version of Electric Purple. |
| Risograph Gradient | #ffffff | neutral | Subtle background gradient for specific sections, adding a textural feel. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Bradford | Georgia | 400, 500 | 11px, 15px, 17px | 1.15, 1.47, 1.53, 2.27 | Body text, article content, component labels — its slightly condensed, serif form reinforces the editorial, artistic feel, making long-form content engaging. |
| LabilVariable | Open Sans | 400 | 11px, 13px, 15px, 18px, 25px, 40px | 1.20, 1.28, 1.40, 1.45, 1.46, 1.73 | Prominent headings, titles, and key UI elements — its variable nature and wider letter spacing provides a distinct, modern counterbalance to Bradford's classic feel, adding visual breathing room to larger text blocks. |
| Labil | Open Sans | 400, 500 | 11px, 13px, 17px | 1.40, 1.45, 1.47 | Secondary headings, metadata, and smaller UI labels — a more compact, structured sans-serif that aids readability in informational contexts. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.4 | 0.005 |
| body | 15 | 1.47 | 0.008 |
| heading | 25 | 1.46 | 0.077 |
| display | 40 | 1.73 | 0.091 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "75px",
    "default": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "40px",
  "cardPadding": "0px",
  "pageMaxWidth": "1200px"
}
```

## Components

### The Nice Feed — Article Feed Strip



### Article Card with Tags



### Floating Navigation Bar



### Primary Ghost Button

**Role:** Call to action, navigation

Transparent background, Black Ink text (#2b2b2b), Black Ink border (#2b2b2b). Text uses Bradford font, weight 400. No border radius. Padding 12.5px vertically, 12.5px horizontally.

### Category Label Button

**Role:** Informational grouping, filtering

Muted Taupe background (#faead9), Black Ink text (#2b2b2b), Black Ink border (#2b2b2b). Text uses Bradford font, weight 400. No border radius. Padding 12.5px vertically, 12.5px horizontally.

### Pill Accent Button

**Role:** Primary call to action (floating nav)

Electric Purple background (#8147ff), Pure White text (#ffffff), Pure White border (#ffffff). Text uses LabilVariable font, weight 400. Border radius 75px. Padding 0px vertically, 20px horizontally.

### Highlighted Button

**Role:** Prominent action

Transparent background, Sunshine Yellow text (#ffd519), Sunshine Yellow border (#ffd519). Text uses LabilVariable font, weight 400. No border radius. Padding 15px top, 16px bottom, 20px horizontally.

### Badge Tag

**Role:** Content categorization

Transparent background, Frost Gray text (#f0efef). Text uses Bradford font, weight 400. No border radius. Padding 5px vertically, 10px horizontally.

### Article Card

**Role:** Content listing

Transparent background, no shadow, no border radius. Padded at 0px. Content is structured within this transparent bounding box, images are essential for visual interest.

### Search Input Field

**Role:** User input

Pure White background (#ffffff), Black Ink text (#000000), Black Ink border (#000000). No border radius. Text uses LabilVariable font, weight 400. Padding 15px top, 16px bottom, 20px horizontally.

## Do's

- Use Electric Purple (#8147ff) for primary interactive elements to ensure visual magnetism.
- Maintain 0px border-radius for all structural elements and standard buttons to reinforce the sharp, editorial aesthetic.
- Employ a 75px border-radius exclusively for navigation pill buttons to highlight their distinctive interactive role.
- Utilize LabilVariable font at larger sizes for headlines, coupled with its generous letter spacing (e.g., 0.091em at 40px), to create impactful, breathable titles.
- Integrate the Muted Taupe (#faead9) background for selected content sections to provide subtle visual differentiation and warmth.
- Leverage the Bradford font for body text and descriptive elements, ensuring readability and an editorial tone.
- Apply 10px element gap as a default for horizontal and vertical spacing between most inline content elements.

## Don'ts

- Avoid using shadows for elevation; rely on color and spacing hierarchy instead.
- Do not deviate from the 0px border-radius for anything other than specific navigation pill buttons.
- Refrain from using highly saturated colors for large background areas or extensive text blocks; reserve them for accents.
- Do not introduce additional font families; the current mix of Bradford, LabilVariable, and Labil is deliberate.
- Avoid generic 'modern' or 'sleek' visual tropes; the system's character is in its eclectic editorial feel.
- Do not introduce gradients unless they mirror the subtle 'Risograph Gradient' pattern; avoid complex, multi-stop gradients.

## Layout

The page adheres to a max-width, center-aligned model of 1200px, providing structured content presentation. The hero section often features a large headline centered over a background or a split layout with prominent text. Content sections maintain a consistent vertical rhythm, with generous section spacing of 40px. The main content flows in a series of stacked, full-width blocks, often alternating between text-dominant sections and grid-like arrangements of images/cards. Feature sections frequently exhibit a three-column grid for articles. Navigation is a combination of a fixed top bar and a floating pill-shaped menu at the bottom, offering both persistent and contextual navigation.

## Imagery

The site primarily uses diverse, high-quality photography and static illustrations to showcase creative work. Imagery is mostly contained within distinct blocks, without significant masks or overlaps, maintaining a structured presentation. Photographs are often bright and product-focused, displaying artworks or designs clearly. Illustrations are varied in style, ranging from whimsical and organic to geometric and flat, always serving to represent artistic content. There's a high density of imagery, particularly within content listings, making the site visually rich and appealing to a creative audience. Icons are minimal, subtle, and outline-based, mostly functional.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA Eye on Design | Shares a focus on editorial content for creatives, a mixture of sharp-cornered UI with colorful accents, and distinctive typography. |
| Communication Arts | Exhibits a similar editorial structure for showcasing creative work, relying on strong imagery and clear, structured layouts. |
| Design Milk | Utilizes a clean, image-heavy grid layout with a strong editorial voice and occasional bold color usage for impact. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
Text: #2b2b2b
Background: #ffffff
CTA: #8147ff
Border: #2b2b2b
Accent: #ffd519

### 3-5 Example Component Prompts
1.  **Create a main article headline**: Text 'The joy and power of Risograph: Risotto showcases 400 printed postcards from artists across the globe'. Font LabilVariable, weight 400, size 40px, lineHeight 1.73, letterSpacing 0.091em. Color Black Ink (#2b2b2b).
2.  **Generate a primary call-to-action button for a sticky footer**: Text 'Search'. Background Electric Purple (#8147ff), text Pure White (#ffffff), border Pure White (#ffffff), borderRadius 75px, padding 0px 20px. Font LabilVariable, weight 400, size 17px.
3.  **Produce a category badge**: Text 'Advertising'. Background transparent, text Frost Gray (#f0efef), borderRadius 0px, padding 5px 10px. Font Bradford, weight 400, size 11px.
4.  **Design a hero section with a main title and a subtitle**: Main title: 'It's Nice That' - LabilVariable, weight 400, size 40px, lineHeight 1.73, letterSpacing 0.091em, color Black Ink (#2b2b2b). Subtitle: 'Inspiring Creativity Since 2007' - Bradford, weight 400, size 17px, lineHeight 1.53, letterSpacing 0.027em, color Medium Gray (#676767). Default page background Pure White (#ffffff).
5.  **Create a text input field**: Placeholder text 'Type your search...'. Background Pure White (#ffffff), text Black Ink (#000000), border Black Ink (#000000), borderRadius 0px, padding 15px top, 16px bottom, 20px horiz. Font LabilVariable, weight 400, size 15px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924802520-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924802520-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3e70af05-a07f-4c11-98ca-6ecb4765e967-1777567910172-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3e70af05-a07f-4c11-98ca-6ecb4765e967-1777567910172-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3e70af05-a07f-4c11-98ca-6ecb4765e967-1777567910172-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3e70af05-a07f-4c11-98ca-6ecb4765e967-1777567910172-preview-detail-poster.jpg |
