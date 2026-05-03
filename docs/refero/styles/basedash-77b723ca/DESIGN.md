# Basedash — Refero Style

- Refero URL: https://styles.refero.design/style/77b723ca-9583-4349-9b5e-2ef8b4fde002
- Site URL: https://www.basedash.com
- ID: 77b723ca-9583-4349-9b5e-2ef8b4fde002
- Theme: dark
- Industry: ai
- Created: 2026-04-30T00:43:07.056Z
- Ranks: newest: 720, popular: 705, trending: 546

> Midnight data studio.

## Description

Basedash employs a 'dark studio canvas' aesthetic, designed to showcase product functionality with stark clarity against a deep, almost black background. White typography and a single vibrant purple accent provide functional highlights and interactive cues, giving the interface a precise, analytical feel. Components are minimalist, often defined by subtle borders or ghost styles, suggesting a lightweight and highly performant system. The overall impression is one of focused utility, where UI elements serve to illuminate data rather than compete with it.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Obsidian Canvas | #000000 | neutral | Primary page and hero backgrounds, deep surface base |
| Eclipse Surface | #050607 | neutral | Card backgrounds, secondary dark surfaces |
| Ghost White | #ffffff | neutral | Primary text, button backgrounds, active navigation elements |
| Ash Gray | #b3b3b3 | neutral | Muted text, hairline borders, secondary content |
| Steel Gray | #808080 | neutral | Tertiary text, inactive icons, subtle dividers |
| Carbon Detail | #333333 | neutral | Fine borders, subtle text elements |
| Illumination White | #e8eaee | neutral | Subtle background for specific sections, sometimes for borders |
| Vivid Violet | #9984d8 | brand | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Gradient Violet | #6b5aa8 | brand | Atmospheric background gradient for accent regions, hinting at depth and digital glow |
| Alert Green | #3fcb7f | semantic | Success states, live indicators, or positive metrics within charts/badges |
| Radial Violet Glow | #a366ff | accent | Soft, expanding radial glow often used as subtle background illumination for product showcases |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui | 400, 500, 600 | 12px, 13px, 14px, 15px, 16px, 18px, 30px, 34px, 48px | 1.00, 1.20, 1.33, 1.38, 1.43, 1.50, 1.56 | Primary UI font for body text, navigation, buttons, and most informational elements. Its functional nature maintains clarity across various weights and sizes. |
| Alpha Lyrae |  | 400 | 48px | 1.00 | Display font for prominent headlines, used sparingly to create a distinctive, digital aesthetic. Specific stylistic sets ('ss01', 'ss02') contribute to its unique character. |
| Iowan Old Style |  serif | 300 | 24px | 1.25 | Serif font for specific body or quote elements at larger sizes, providing a refined textual counterpoint to the sans-serif display type. The light weight (300) combined with slight letter-spacing creates an airy, almost whispered presence. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.36 |
| heading-sm | 18 | 1.5 | -0.54 |
| heading | 24 | 1.25 | -0.6 |
| heading-lg | 30 | 1.33 | -0.9 |
| display-sm | 34 | 1.2 | -1.02 |
| display | 48 | 1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "999px",
    "cards": "16px",
    "fields": "6px",
    "buttons": "6px"
  },
  "elementGap": "12px",
  "sectionGap": "24px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action button for starting free trials or sign-ups.

Solid Ghost White background (#ffffff), Obsidian Canvas text (#000000). Padding is 8px vertical, 20px horizontal. Border-radius of 12px.

### Ghost Accent Button

**Role:** Secondary call to action button, or action that needs subtle visual emphasis.

Transparent background with 25% opacity (oklab(0 0 0 / 0.25)), Ghost White text (#ffffff). Outline border in 10% opacity white (rgba(255, 255, 255, 0.1)). Padding is 8px vertical, 20px horizontal. Border-radius of 12px.

### Navigation Link Button

**Role:** Links within the main navigation bar.

Transparent background, muted Ghost White text (rgba(255, 255, 255, 0.5)). No padding or border-radius; meant to be part of inline navigation.

### Small Dark Button

**Role:** Compact utility buttons, often for logging in or secondary actions in header.

Obsidian Canvas background (#000000), Ghost White text (#ffffff). Outline border in 10% opacity white (rgba(255, 255, 255, 0.1)). Padding 8px vertical, 12px horizontal. Border-radius of 6px.

### Content Card

**Role:** Containers for content blocks like testimonials or feature descriptions.

Solid Eclipse Surface background (#050607), no box-shadow. Border-radius of 14px. Padding 14px vertical, 14px horizontal internally.

### Live Status Badge

**Role:** Used to denote 'Live' status or positive indicators.

Solid Alert Green background (#3fcb7f), Ghost White text at 70% opacity (rgba(255, 255, 255, 0.7)). Very high border-radius (1.67772e+07px) creating a pill shape. No internal padding means text is flush with badge background.

## Do's

- Use Obsidian Canvas (#000000) as the dominant background color for seamless dark mode cohesion.
- Apply Ghost White (#ffffff) for primary text and calls to action against dark backgrounds to ensure high contrast.
- Employ Vivid Violet (#9984d8) as a border accent for interactive elements or visual framing, not as a primary fill color for buttons.
- Utilize Inter font for all functional text: body, buttons, navigation, and smaller headings at its specified letter spacing -0.0300em.
- Maintain a clear visual hierarchy by limiting Alpha Lyrae to prominent headlines at 48px, with its unique font feature settings "ss01" and "ss02".
- Define card surfaces with Eclipse Surface (#050607) and a 14px border-radius, reserving elevation for occasional, subtle glows.
- Apply 6px border-radius for buttons and input fields, and 16px for cards to maintain consistent shape language.
- Use Alert Green (#3fcb7f) specifically for positive semantic indicators like 'Live' status or success messages.

## Don'ts

- Avoid using bright, saturated colors for large background areas; stick to the neutral palette for canvas and surfaces.
- Do not introduce strong visual shadows on elements; elevation is primarily achieved through subtle background glows or no shadow at all.
- Do not use Iowan Old Style for general UI text; reserve it for specific, larger body sections or quotes requiring a refined feel.
- Refrain from drastically altering letter-spacing for Inter font; maintain -0.0300em for consistent text density.
- Do not deviate from the established padding values for buttons (8px vertical, 20px horizontal for larger, 8px vertical, 12px horizontal for small) to preserve component weight.
- Avoid adding new radii values; adhere to 6px, 14px/16px, and 999px for consistency across components.
- Do not use Vivid Violet (#9984d8) as a background for primary calls to action, as it functions as an accent border or decorative element.

## Layout

The page structure favors a full-bleed layout, particularly in the hero section, but maintains content within discernable, perhaps implied, max-width constraints in other areas. The hero features a centered headline over a dark, subtly animated product visual. Section rhythm is primarily consistent vertical spacing on a dark canvas, utilizing the Obsidian Canvas as a continuous background rather than alternating light/dark bands. Content is arranged in flexible patterns, including centered stacks for key messages and multi-column grids for integrations. Navigation is a sticky top bar, minimalist and unobtrusive.

## Imagery

Imagery on Basedash is primarily functional product screenshots and data visualizations, presented directly with minimal framing. These are often enveloped by subtle atmospheric gradients or glows (like the Radial Violet Glow) that hint at functionality without being distracting. The icons are mostly monochromatic (white), with some being multi-colored, and serve to represent data sources or integrations in a compact, recognizable format. There’s a balance between text dominance and visual explanation, where images clarity illustrates product features.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Dark-themed UI, minimalist components, and a single accent color for interactive elements. |
| Supabase | Deep dark backgrounds, high-contrast white text, and product-focused imagery with subtle glowing effects. |
| Vercel | Clean, dark interface with ghost buttons, precise typography, and functional use of white space. |
| Stripe | Emphasis on clear, readable typography against simple backgrounds, and a focus on product visuals. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #b3b3b3
accent: #9984d8
primary action: #000000 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #000000 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a Testimonial Card for 'Nathan Baschez Founder · Lex': Eclipse Surface background, 14px border-radius, 14px padding. Quote text in Iowan Old Style weight 300 at 24px, Ghost White text, letter-spacing -0.0250em. Below, add 'Read case study →' as an Ash Gray link.
3. Implement a 'Log in' navigation button: No background, Ghost White text at 50% opacity (rgba(255, 255, 255, 0.5)), Inter weight 400 at 16px, no padding or border-radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509754674-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509754674-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/77b723ca-9583-4349-9b5e-2ef8b4fde002-1777582915859-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/77b723ca-9583-4349-9b5e-2ef8b4fde002-1777582915859-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/77b723ca-9583-4349-9b5e-2ef8b4fde002-1777582915859-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/77b723ca-9583-4349-9b5e-2ef8b4fde002-1777582915859-preview-detail-poster.jpg |
