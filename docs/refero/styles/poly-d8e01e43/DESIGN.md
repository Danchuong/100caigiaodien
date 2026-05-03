# Poly — Refero Style

- Refero URL: https://styles.refero.design/style/d8e01e43-d260-4fa3-8f42-ae39e5c6ac84
- Site URL: https://poly.app
- ID: d8e01e43-d260-4fa3-8f42-ae39e5c6ac84
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:14:55.399Z
- Ranks: newest: 858, popular: 824, trending: 670

> Subtle Depth, Focused Accent

## Description

Poly's visual system evokes a smart, understated productivity environment. It employs a near-monochromatic palette for structural elements, allowing a single vibrant orange-red gradient to serve as a focused accent for branding and calls to action. Typography balances a clean sans-serif for body text with distinctive custom display fonts for impact, featuring subtle letter-spacing for refined text blocks. Components are clean and minimal with soft rounded corners and a focus on clarity through considered use of shadows for depth.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #f4f4f4 | neutral | Page backgrounds, card surfaces, UI frames. Provides a bright, spacious backdrop |
| Ink Black | #000000 | neutral | Primary text, prominent icons, dark backgrounds for contrasting sections. Foundation for high-contrast interface elements |
| Steel Gray | #292930 | neutral | Secondary text, muted icons, subtle borders, and background elements in dark mode. Provides hierarchy with less visual weight than Ink Black |
| Shadow Tint | #cccccc | neutral | Subtle shadow base for elevation effects |
| Poly Gradient | #f4824d | brand | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui | 400, 600 | 12px, 15px, 24px, 30px, 45px | 1.10, 1.20, 1.50 | Primary UI text, body copy, link text. Its utilitarian clarity ensures readability across all functional elements. |
| Haffer Variable |  | 450 | 24px, 30px, 45px, 53px | 1.10 | Prominent headings and display text. The variable font offers dynamic sizing and a distinctive, semi-bold presence without being heavy. |
| Bogue |  | 400 | 24px, 30px, 45px, 53px | 1.10, 1.50 | Attention-grabbing headlines and badge text. Features a tighter tracking for a more compact and impactful feel than other fonts. |
| Haffer |  | 400 | 15px, 24px | 1.20, 1.50 | Secondary headings and stylized body sections, often within badges. Provides a slightly lighter alternative to Haffer Variable for text hierarchy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.24 |
| body | 15 | 1.5 | -0.3 |
| subheading | 24 | 1.2 | -0.48 |
| heading | 30 | 1.1 | -0.6 |
| heading-lg | 45 | 1.1 | -0.9 |
| display | 53 | 1.1 | -1.06 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "8px"
  },
  "elementGap": "12px",
  "sectionGap": "48px",
  "cardPadding": "24px",
  "pageMaxWidth": "1280px"
}
```

## Components

### Primary Call-to-Action Button

**Role:** Interactive element

Filled button with a vibrant gradient background and an 8px border-radius, using Ink Black text. Acts as the main prompt for user action. Example: 'Download Poly'.

### Secondary Ghost Button

**Role:** Interactive element

Ghost button with an Ink Black border (1px solid), Ink Black text, and a transparent background. Features an 8px border-radius. Provides a secondary action without commanding primary focus. Example: 'Watch Video'.

### Navigation Link

**Role:** Interactive element

Simple text link using Ink Black or Steel Gray text for header navigation items. Lightly shadowed on hover with #cccccc for a subtle lift. Example: 'Login', 'Join waitlist'.

### Info Badge

**Role:** Informative label

Text badge with Canvas White text on a transparent background, sans padding or border-radius, often using the Bogue font for distinctiveness. Used for highlighting key phrases. Example: 'Preserve human knowledge with Poly.'

## Do's

- Use 'Canvas White' #f4f4f4 as the primary background for most sections to maintain a bright, open feel.
- Apply 'Ink Black' #000000 for all primary text and critical UI elements to ensure high contrast and readability.
- Reserve the 'Poly Gradient' (linear-gradient(134.77deg, rgb(244, 130, 77) 25.1%, rgb(244, 41, 25) 74.9%)) exclusively for primary calls to action and brand accents.
- Employ an 8px border-radius for all interactive elements like buttons and any card-like containers to establish a consistent soft edge.
- Maintain a clear visual hierarchy by using 'Inter' for body and functional text, and 'Haffer Variable' or 'Bogue' for headings as appropriate.
- Utilize 12px for 'elementGap' to define comfortable spacing between interactive elements and components.
- Introduce subtle elevation using rgba(0, 0, 0, 0.2) 2px 2px 5px 0px for interactive elements on hover, giving them a slight lift off the surface.

## Don'ts

- Do not use saturated colors other than the 'Poly Gradient' for interactive elements or brand accents.
- Avoid arbitrary border-radius values; stick to the standard 8px for a cohesive look.
- Do not use the 'Poly Gradient' or any significant chromatic colors for body text or secondary UI elements.
- Do not exceed a page max-width of 1280px for core content, allowing for a contained reading experience.
- Refrain from using strong, opaque shadows; leverage the subtle inset/offset shadow style for visual depth.
- Do not use more than two distinct font families on any single screen to avoid visual clutter.
- Avoid dense information blocks; instead, use 'sectionGap' of 48px to create comfortable visual breaks between major content areas.

## Layout

The page primarily uses a contained layout within a 1280px max-width, centrally aligned. The hero section is full-bleed with the atmospheric photography, featuring centered main headlines and calls to action. Below the hero, content generally follows a clean, spacious vertical rhythm with a section gap of 48px. Specific content arrangements are not fully discernible from the provided data but suggest a focus on clear, stacked information blocks, likely with a single column. Navigation is a minimal top bar, featuring discrete 'Login' and 'Join waitlist' links.

## Imagery

The visual language for imagery is primarily functional and contextual, with product screenshots (like a laptop screen showing UI) or atmospheric photography setting a scene. The prominent hero image uses muted, desaturated, high-key photography of a desk setup, serving as a background for UI elements. There are no illustrations or highly stylized graphics, emphasizing a realistic and grounded aesthetic. Icons (e.g., play button triangle, download arrow) are minimal, filled, and monochromatic, integrated seamlessly into buttons. Imagery serves to establish a professional, productive atmosphere and demonstrate product interaction, rather than purely decorative or abstract concepts.

## Elevation

| Element | Style |
| --- | --- |
| Interactive Link/Button | rgba(0, 0, 0, 0.2) 2px 2px 5px 0px, rgba(0, 0, 0, 0.15) -2px -2px 4px 0px inset, rgba(255, 255, 255, 0.15) 2px 2px 4px 0px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Raycast | Monochromatic interface with a single vibrant accent color for interaction and branding, paired with minimal UI design. |
| Warp terminal | Focus on developer tooling with clean typography and a muted color palette, emphasizing function over decoration. |
| Supabase | Clear, modern UI with a strong emphasis on text hierarchy and structured layouts, offset by a distinctive brand color for CTAs. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #f4f4f4
border: #292930
accent: #f4824d
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
2. Create a secondary ghost button: background transparent, border 1px solid #000000, text #000000 (Inter 400), border-radius 8px, padding 12px 24px. Label 'Watch Video'.
3. Create a header navigation link: text #000000 (Inter 400), on hover add box-shadow rgba(0, 0, 0, 0.2) 2px 2px 5px 0px, rgba(0, 0, 0, 0.15) -2px -2px 4px 0px inset, rgba(255, 255, 255, 0.15) 2px 2px 4px 0px inset. Label 'Login'.
4. Create a hero heading: 'The Intelligent File Browser' using Haffer Variable 450, 53px, #f4f4f4, letter-spacing -1.06px, line-height 1.1.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508062780-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508062780-thumb.jpg |
