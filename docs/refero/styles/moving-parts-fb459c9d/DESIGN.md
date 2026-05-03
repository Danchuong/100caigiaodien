# Moving Parts — Refero Style

- Refero URL: https://styles.refero.design/style/fb459c9d-c089-4d0b-b5b0-d147b1c4ebd7
- Site URL: https://movingparts.io
- ID: fb459c9d-c089-4d0b-b5b0-d147b1c4ebd7
- Theme: light
- Industry: devtools
- Created: 2026-04-30T03:57:53.703Z
- Ranks: newest: 17, popular: 115, trending: 89

> High-contrast geometric clarity

## Description

Moving Parts employs a bold, high-contrast aesthetic characterized by large, confident typography and a vibrant blue accent on an otherwise monochrome canvas. Geometric shapes and a grid-like structure provide underlying order, while distinct large radii soften component edges. The design feels sharp and modern, with a strong focus on readability for headlines and crisp functional elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, headers, icon strokes, borders, and some background fills on dark sections. High contrast establishes a strong visual hierarchy |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, secondary text on dark backgrounds, and icon fills. Provides a bright, expansive foundation |
| Ghostly Gray | #121212 | neutral | Secondary text in dark sections, subtle borders, and some elevated dark surfaces. Supports the dark mode appearance with a slightly softer black |
| Fog Grid | #bcc1c7 | neutral | Decorative background grids and subtle outlines. Creates texture without distracting from content |
| Warm Mist | #efefef | neutral | Subtle background panels and soft dividers. Adds a touch of warmth to the neutral palette |
| Cloud Gray | #b3b3b3 | neutral | Less prominent text, borders, and subtle shadow effects. Indicates inactive states or secondary information |
| Pale Ash | #999999 | neutral | Muted helper text and tertiary information. Recedes into the background for less critical content |
| Deep Royal Blue | #0000ff | brand | Primary action buttons, interactive elements, highlights, and featured backgrounds. This vivid blue serves as the sole dominant brand accent |
| Emerald Green | #00d37c | accent | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content |
| Conic Spectrum | #57C0F1 | accent | Decorative gradients in abstract visuals or hero sections. Adds a burst of multi-chromatic energy |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Whyte Semi-Mono | Space Mono | 400, 500, 600 | 12px, 17px, 18px, 21px, 25px, 27px, 30px, 34px, 35px | 1.06, 1.15, 1.18, 1.20, 1.36, 1.89, 2.38 | Body text, smaller headings, and supplementary information. Its semi-monospaced nature adds a technical, precise feel. |
| Unica77 | Roboto | 400, 500, 600, 700 | 18px, 21px, 22px, 23px, 26px, 27px, 28px, 30px, 31px, 32px, 35px, 38px, 40px, 47px, 51px, 53px, 58px, 62px, 67px, 70px, 100px, 110px | 0.92, 0.93, 0.94, 0.95, 0.96, 1.00, 1.05, 1.12, 1.19, 1.20, 1.21, 1.22, 1.27, 1.32, 1.37, 1.47, 1.61, 1.71, 1.81 | Primary headings, navigation, and prominent callouts. Features like 'ss01' for alternate glyphs give it specific brand character. |
| PP Neue Montreal | Inter | 400, 500 | 27px, 32px, 60px, 81px, 98px | 0.82, 0.84, 0.85, 0.87, 1.20, 1.21 | Large, impactful display headlines where tight tracking enhances presence. Used for key section titles. |
| Druk XXCondensed Super | Oswald Condensed | 400 | 195px, 248px | 1.20 | Massive, compressed display typography for highly visual statements, often paired with graphical elements. |
| Inter |  | 400, 500, 600 | 25px, 27px, 28px, 35px, 37px, 42px, 52px | 0.98, 1.2, 1.38, 1.48 | Inter — detected in extracted data but not described by AI |
| ui-monospace |  | 400 | 26px | 1.2 | ui-monospace — detected in extracted data but not described by AI |
| Fraunces 72pt Soft |  | 100, 200 | 27px, 36px, 60px | 1.2, 1.29, 1.35 | Fraunces 72pt Soft — detected in extracted data but not described by AI |
| Arial |  | 400, 500, 600 | 13px | 1.2 | Arial — detected in extracted data but not described by AI |
| Fraunces 72pt SuperSoft |  | 200 | 45px | 1.06 | Fraunces 72pt SuperSoft — detected in extracted data but not described by AI |
| TAN-BUSTER |  | 600 | 91px | 1.18 | TAN-BUSTER — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 17 | 1.18 | -0.1 |
| subheading | 21 | 1.2 | 0.21 |
| heading-sm | 27 | 1.2 | 0.27 |
| heading | 60 | 0.85 | -0.6 |
| heading-lg | 98 | 0.82 | -2.94 |
| display | 248 | 1.2 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "90.3833px",
    "icons": "18px",
    "images": "14px",
    "buttons": "0px",
    "largeCards": "106.333px",
    "smallElements": "2.5px"
  },
  "elementGap": "13px",
  "sectionGap": "40px",
  "cardPadding": "30px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action

Filled button with 'Deep Royal Blue' background, 'Canvas White' text, and 0px border radius. Padding set to 25px vertical, 30px horizontal. Uses Unica77 font.

### Ghost Button (Primary)

**Role:** Secondary action or navigation

Ghost button with transparent background, 'Midnight Ink' text, and 0px border radius. Padding set to 25px vertical, 30px horizontal. Uses Unica77 font.

### Pill Button (Neutral)

**Role:** Status tags or filters

Pill-shaped button with 'Cloud Gray' background, 'Midnight Ink' text, and 18px border-radius. Minimal padding.

### Rounded Corner Card

**Role:** Content container

Card with 'Canvas White' background and 90.3833px border radius. No box shadow evident, assumes a flat presentation.

### Large Rounded Card (Bottom-Flat)

**Role:** Hero or feature container

Card with 'Deep Royal Blue' background and 106.333px 106.333px 0px 0px border-radius, creating a flat bottom edge. No box shadow evident. Large-scale component.

### Text Input (Base)

**Role:** Single-line text entry

Input field with 'Canvas White' background, 'Midnight Ink' text, and 0px border radius. Padding set to 25px vertical, 30px horizontal. Uses Unica77.

## Do's

- Use 'Midnight Ink' (#000000) for all primary text and headlines to maintain strong contrast.
- Apply 'Deep Royal Blue' (#0000ff) exclusively for primary calls to action and critical interactive elements.
- Utilize Unica77 for headlines and navigation, leveraging its font feature settings for characteristic glyphs and precise tracking.
- Favor large, confident typography for headlines, with tighter letter-spacing on larger sizes and normal spacing on body text.
- Maintain a clear visual hierarchy by limiting saturated colors to 'Deep Royal Blue' and 'Emerald Green' as deliberate accents.
- Employ the specific large border radii of 90.3833px for content cards and 106.333px for prominent containers to define component shapes.
- Ensure all interactive elements provide a comfortable 25px vertical and 30px horizontal padding, as seen on buttons and inputs.

## Don'ts

- Do not introduce new saturated primary colors; adhere to 'Deep Royal Blue' as the sole dominant brand accent.
- Avoid generic small border radii; use the distinct 0px for buttons or the large values (90.3833px, 106.333px) for cards and containers.
- Do not use subtle gray backgrounds or text colors for primary content or calls to action; reserve them for secondary information or decorative grids.
- Do not add additional box-shadows beyond the single defined `rgba(0, 0, 0, 0.3) 15px 20px 30px 0px` for cards, maintaining a predominantly flat aesthetic.
- Do not break the rigid grid-like layout with free-form overlapping elements, maintaining structured geometric compositions.
- Avoid thin, lightweight typefaces for headlines outside of specific decorative uses; default to heavier weights for impact.
- Do not use 'Arial' or 'ui-monospace' for standard UI elements unless explicitly for code snippets, adhering to the brand's custom typefaces.

## Layout

The page primarily uses a max-width contained layout, likely centered, although a specific max-width is not provided. The hero section is characterized by a full-width visual, often a dark background or distinct product visual, with a large, centered headline and a clear call to action below. Section rhythm is driven by alternating background colors (white, dark, solid brand blue) creating distinct blocks of content. Content within sections is often arranged in prominent single-column stacks for headlines, or two-column text-left/image-right or image-left/text-right patterns for feature explanations. Large components like cards can extend this two-column approach to highlight product visuals. Typography dominates the visual hierarchy, with large headlines guiding the eye. Navigation is a persistent top bar, minimal and un-obtrusive.

## Imagery

Imagery primarily consists of bright product screenshots of mobile UI components, often set against a 'Deep Royal Blue' background, emphasizing the product's native context. Abstract geometric shapes, sometimes with vivid conic gradients, act as decorative elements, adding visual interest and motion. Icons are outlined, with a moderate stroke weight, typically 'Midnight Ink' or inverse 'Canvas White', keeping to a minimalist, functional aesthetic. Photography is minimal, used for social proof or team profiles in a clean, high-contrast style. Visual density is balanced: product showcases are image-heavy, while explanatory sections are text-dominant with functional icons.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(0, 0, 0, 0.3) 15px 20px 30px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Framer | Uses large, confident typography against a clean, often monochrome background, with strong accent colors for interactive elements. |
| Linear | Employs high-contrast text and a minimalist aesthetic with a focus on sharp, functional UI elements and a controlled color palette. |
| Spline | Features bold, geometric layouts, strong typographic hierarchy, and a limited but impactful accent color. |
| Vercel | Characterized by its dark mode, high-contrast text, command-line aesthetics, and clean display of code and product snippets. |

## Custom Sections

### Agent Prompt Guide

primary action: #0000ff (filled action)
Create a Primary Action Button: #0000ff background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.


Create a Feature Card: 'Canvas White' (#ffffff) background, 90.3833px border-radius. Headline (Unica77, 32px, weight 700, 'Midnight Ink'). Body text (Whyte Semi-Mono, 17px, weight 400, 'Midnight Ink'). Internal padding of 30px.

Create a Navigation Item: 'Midnight Ink' (#000000) text (Unica77, 21px, weight 500, line-height 1.2) against a 'Canvas White' (#ffffff) background. Normal letter-spacing.

Create an Icon Button: 'Midnight Ink' (#000000) text (Whyte Semi-Mono, 12px, weight 400) or 'Deep Royal Blue' (#0000ff) icon stroke on a 'Canvas White' (#ffffff) background with 18px border radius for the interactive part. Element gap 13px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521447559-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521447559-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/fb459c9d-c089-4d0b-b5b0-d147b1c4ebd7-1777582760806-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/fb459c9d-c089-4d0b-b5b0-d147b1c4ebd7-1777582760806-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/fb459c9d-c089-4d0b-b5b0-d147b1c4ebd7-1777582760806-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/fb459c9d-c089-4d0b-b5b0-d147b1c4ebd7-1777582760806-preview-detail-poster.jpg |
