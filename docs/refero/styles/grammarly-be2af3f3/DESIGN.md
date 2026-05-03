# Grammarly — Refero Style

- Refero URL: https://styles.refero.design/style/be2af3f3-3886-4d70-973f-f7b5ab8d1a99
- Site URL: https://grammarly.com
- ID: be2af3f3-3886-4d70-973f-f7b5ab8d1a99
- Theme: light
- Industry: productivity
- Created: 2026-04-05T13:47:59.000Z
- Ranks: newest: 953, popular: 428, trending: 829

> Crisp digital parchment

## Description

Grammarly presents a grounded, text-first experience centered on clarity and understated precision. Its defining visual characteristic is the near-achromatic palette, almost entirely grays and whites, which creates a quiet background for the functionality. The single strong 'Teal Verdant' accent is reserved almost exclusively for calls to action, generating a strong visual cue without overwhelming the interface. Subtle textural depth is hinted at through the interaction of dark grays and crisp whites, rather than overt shadows or complex color schemes.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Inkwell Deep | #0e101a | neutral | Primary text, deep backgrounds for focus areas, prominent headings. |
| Inkwell Muted | #1f243c | neutral | Secondary text, subheadings, subtle branding elements, icon fills. |
| Teal Verdant | #027e6f | brand | Primary calls to action, active navigation indicators, key interactive elements — signals forward momentum and success. |
| Slate Blue | #333954 | neutral | Tertiary text, background for secondary buttons, subtle graphical accents. |
| Silver Pine | #4d536 | neutral | In-active button text, muted body text, secondary icon outlines. |
| Stone Gray | #6d758d | neutral | Default button borders, light graphical elements. |
| Arctic Mist | #ffffff | neutral | Page backgrounds, card surfaces, primary button backgrounds, inverse text. |
| Snow Drift | #f5f5f5 | neutral | Light background surfaces, subtle button states. |
| Frost Gray | #ebebeb | neutral | Subtle borders, button separators. |
| Graphite | #1c1c1c | neutral | High-contrast small text, icons, prominent lines. |
| Ash | #545454 | neutral | Body text for readability, secondary icons. |
| Misty Silver | #c6cbde | neutral | Subtle borders, divider lines, disabled states. |
| Highlight Green | #00e0ac | accent | Subtle interactive element highlights, small indicators. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| matter | Open Sans | 670 | 20px, 36px, 46px, 52px | 1.09, 1.11, 1.12, 1.20 | Display and main headings; the weight 670 gives titles a substantial, yet not heavy, presence. The negative letter-spacing tightens headlines for impact. |
| Glyph | Roboto | 400, 700 | 12px, 13px, 14px, 16px, 18px, 20px, 22px | 1.20, 1.25, 1.43, 1.44, 1.45, 1.50, 1.71, 2.29 | Primary body text, navigation elements, button labels, and secondary UI text. Its flexibility across weights and sizes makes it the workhorse for most content. |
| Inter | Inter | 400 | 16px | 1.50 | Specific use for card content, with particular font features enabled for optimized readability in information dense blocks. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-lg | 14 | 1.45 |  |
| heading | 20 | 1.2 |  |
| heading-lg | 36 | 1.12 | -0.48 |
| display-sm | 46 | 1.11 | -0.48 |
| display | 52 | 1.09 | -0.52 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Enterprise ROI Banner with Stats



### Cookie Consent Banner



### Primary CTA Button

**Role:** Call to action

backgroundColor=Teal Verdant (#027e6f) with text color Arctic Mist (#ffffff). 6px borderRadius. Padding of 16px vertical and 24px horizontal. Represents the primary user action on the page.

### Secondary Button

**Role:** Alternative action

backgroundColor=Arctic Mist (#ffffff) with text color Graphite (#000000) and Frost Gray (#ebebeb) border. 8px borderRadius. No explicit padding mentioned, implying content-based sizing, but typically 16px horizontal and 8px vertical.

### Ghost Navigation Button

**Role:** Navigation links and secondary actions

Transparent background with Inkwell Muted (#1f243c) text color. Subtle 4px borderRadius, suggesting minimal visual framing for elements like nav items. Padding of 0px vertical and 12px horizontal.

### Tertiary Outline Button

**Role:** Alternative secondary action

backgroundColor=Arctic Mist (#ffffff) with text color Silver Pine (#4d536e) and Stone Gray (#6d758d) border. 6px borderRadius. Padding of 8px vertical and 16px horizontal. Less prominent than primary or secondary buttons.

### Informational Card

**Role:** Content display

Transparent background, 0px borderRadius, no box-shadow. Relies on layout and text for structure, often serving as a container for images or specific content blocks without explicit visual framing.

## Do's

- Prioritize Inkwell Deep (#0e101a) or Inkwell Muted (#1f243c) for all text to maintain a consistent dark-on-light theme.
- Use Teal Verdant (#027e6f) exclusively for primary calls to action, maintaining its impact and clarity.
- Apply 8px border-radius to all interactive buttons for a consistent soft-edged feel.
- Utilize 'matter' (substitute Open Sans) for all headlines and display text, leveraging its 670 weight and negative letter-spacing for sharp, impactful titles.
- Maintain a comfortable spacing density with a base of 8px, frequently using 8px, 16px, 24px and 32px for gaps and padding.

## Don'ts

- Avoid introducing additional saturated colors beyond Teal Verdant (#027e6f); the system relies on a near-achromatic palette for its tranquility.
- Do not use box-shadows for elevation; the system uses varying background shades (like Arctic Mist #ffffff and Snow Drift #f5f5f5) to create perceived depth.
- Do not use overly complex background patterns or gradients; stick to solid color surfaces to maintain clarity.
- Avoid excessive variation in typography; 'matter' for headings and 'Glyph' for body text should cover most use cases.
- Do not design full-bleed layouts; content should be subtly constrained, implying a max-width, with consistent horizontal padding for readability.

## Layout

The site features a centered, max-width layout with a primary content column. The hero section often presents a large, centered headline over a plain background, followed by calls to action. Subsequent sections utilize a staggered or simple grid structure, frequently seen as alternating text and image arrangements or multi-column feature lists. There's a clear visual rhythm established by generous vertical spacing between sections (40px) and a consistent internal element spacing (8px base). The design avoids full-bleed imagery, opting for a contained, readable content block approach. Navigation is a persistent top bar, with a prominent 'Get Grammarly' button.

## Imagery

This site predominantly uses product screenshots and abstract graphic elements. Product screenshots are typically tightly cropped, showcasing UI functionality directly, often within a contained system-like window. Illustrations are abstract and soft geometric, using blurred gradients and light chromatic tints to create ambient atmosphere without being overtly illustrative – they serve a decorative rather than narrative role. Icons are outlined, subtle, and monochromatic, integrated seamlessly with text. The overall approach is highly utilitarian and explanatory, with visuals supporting the product's function rather than creating a rich brand narrative through imagery. Image density is moderate, used to break up text sections and highlight product features.

## Similar Brands

| Business | Why |
| --- | --- |
| Notion | Clean, predominantly white/light gray interface with a strong focus on text and minimal, functional UI elements. |
| Slack | Utilizes a highly functional and organized layout with subtle use of color for interaction and a generally clean, text-heavy aesthetic. |
| Monday.com | Relies on clear, defined blocks of content, strong typography for headings, and functional, single-color CTAs against a mostly neutral background. |
| Zapier | Employs a clean, bright interface with a primary brand color reserved for key actions, emphasizing clarity and productivity through visual restraint. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- Text (Primary): #0e101a (Inkwell Deep)
- Background (Page): #ffffff (Arctic Mist)
- CTA (Primary): #027e6f (Teal Verdant)
- Border (Default): #d9d9d9
- Accent: #00e0ac (Highlight Green)

**Example Component Prompts:**
1. Create a hero section: background Arctic Mist (#ffffff). Headline (matter, 52px, 670 weight, -0.0100em letterSpacing, Inkwell Deep #0e101a). Subtext (Glyph, 18px, 400 weight, Inkwell Muted #1f243c). Primary button: Teal Verdant (#027e6f), Arctic Mist (#ffffff) text, 6px radius, 16px vertical/24px horizontal padding.
2. Design a feature card: no background, no border, 0px border-radius. Headline (Glyph, 22px, 700 weight, Inkwell Deep #0e101a). Description (Inter, 16px, 400 weight, Slate Blue #333954). Include a small, outlined icon (path color Inkwell Muted #1f243c) above the headline.
3. Implement a navigation bar: Arctic Mist (#ffffff) background. Logo (SVG fill Inkwell Deep #0e101a). Nav links (Glyph, 14px, 400 weight, Inkwell Muted #1f243c, 4px border-radius, 0px vertical/12px horizontal padding). Active nav link text Teal Verdant (#027e6f).
4. Generate a tertiary button: Arctic Mist (#ffffff) background, Silver Pine (#4d536e) text, Stone Gray (#6d758d) border. 6px border-radius, 8px vertical/16px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932076704-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932076704-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/be2af3f3-3886-4d70-973f-f7b5ab8d1a99-1777568449980-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/be2af3f3-3886-4d70-973f-f7b5ab8d1a99-1777568449980-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/be2af3f3-3886-4d70-973f-f7b5ab8d1a99-1777568449980-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/be2af3f3-3886-4d70-973f-f7b5ab8d1a99-1777568449980-preview-detail-poster.jpg |
