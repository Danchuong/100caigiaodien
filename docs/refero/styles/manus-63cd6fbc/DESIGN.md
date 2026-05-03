# Manus — Refero Style

- Refero URL: https://styles.refero.design/style/63cd6fbc-c3f1-4fd4-9115-70300bc07adc
- Site URL: https://manus.im
- ID: 63cd6fbc-c3f1-4fd4-9115-70300bc07adc
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:43:27.303Z
- Ranks: newest: 717, popular: 537, trending: 353

> Monochromatic command center: Efficient, responsive, and quietly powerful.

## Description

Manus employs a stark, functional interface with a restrained achromatic palette, punctuated by deep charcoal accents. The design prioritizes clear information hierarchy and interaction over elaborate aesthetics, featuring rounded corners for components and subtle shadow for depth. Typography is crisp and minimal, supporting a quick, efficient user experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Ice | #f8f8f7 | neutral | Primary page and large section backgrounds. Establishes the bright, airy base |
| Surface Snow | #ffffff | neutral | Card backgrounds, elevated UI elements, and input fields. Provides a clean, contrasting surface |
| Ghost Border | #e5e7eb | neutral | Subtle borders for cards, ghost buttons, and dividers. Creates separation without harsh lines |
| Text Primary | #34322d | neutral | Secondary body text, navigation labels, and subdued headings. Do not promote it to the primary CTA color |
| Text Secondary | #5e5e5b | neutral | Muted text, helper messages, and inactive navigation links. Provides reduced emphasis |
| Action Ink | #1a1a19 | brand | Primary call-to-action button backgrounds and prominent button fills. Indicates primary interactive elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| -apple-system | system-ui | 400, 500, 510 | 12px, 14px, 16px | 1.29, 1.33, 1.43, 1.50 | The primary typeface for all UI elements. Its clean, neutral characteristics support clear information display across buttons, links, body text, and headings. |
| Libre Baskerville | serif | 400 | 36px | 1.22 | Used sparingly for prominent headings, its serif character provides a touch of classic authority against the otherwise modern system font, without distracting. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body | 14 | 1.43 |  |
| body-lg | 16 | 1.29 |  |
| heading | 36 | 1.22 |  |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "9999px",
    "cards": "22px",
    "buttons": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "100px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call-to-action button.

Background #1a1a19, text white (#ffffff), 8px border-radius, 8px horizontal padding. Font is -apple-system.

### Ghost Button

**Role:** Secondary action button.

Transparent background, text #5e5e5b, 9999px border-radius, no discernible padding in data. Font is -apple-system.

### Outlined Button

**Role:** Tertiary action or navigational button.

Transparent background, text #34322d, 1px #e5e7eb border, 8px border-radius, 8px horizontal padding. Font is -apple-system.

### Pill Ghost Button

**Role:** Filter or tag button.

rgba(55, 53, 47, 0.08) background, text #ffffff, 9999px border-radius, no discernible padding in data. Font is -apple-system.

### Elevated Card

**Role:** Content container with subtle depth.

Background #ffffff, 22px border-radius, 12px vertical padding. Casts a soft shadow: rgba(0, 0, 0, 0.02) 0px 12px 32px 0px.

### Header Navigation Link

**Role:** Top-level navigation items.

Text #5e5e5b, using -apple-system font at 14px.

### Banner Alert

**Role:** Informational banner.

Background implies #f8f8f7, text #34322d. Minimal styling suggests it's primarily text content with implied padding.

### Input Field

**Role:** User input area.

Background #ffffff, 22px border-radius (same as cards). Suggests a subtle inner shadow or border for definition, similar to Card shadow/border logic.

## Do's

- Prioritize Canvas Ice (#f8f8f7) for primary page backgrounds to maintain a bright, expansive feel.
- Use Action Ink (#1a1a19) exclusively for primary call-to-action button backgrounds to preserve its impact.
- Apply 22px border-radius to large content cards for a soft, approachable aesthetic.
- Use 8px border-radius for interactive elements like buttons and input fields for consistent component styling.
- Maintain -apple-system as the default font for all UI text, leveraging its multiple weights for hierarchy.
- Employ Text Primary (#34322d) for all main content and heading text to ensure readability.
- Utilize Ghost Border (#e5e7eb) for subtle dividers and outlining ghost buttons to provide visual structure without heaviness.

## Don'ts

- Avoid using saturated colors in backgrounds or for large decorative elements; color should be functional punctuation.
- Do not deviate from the established type scale and font families; introducing new fonts or arbitrary sizes will break hierarchy.
- Do not introduce strong, dark shadows; the system relies on a very subtle rgba(0, 0, 0, 0.02) 0px 12px 32px 0px for elevation.
- Avoid excessive use of borders; use Ghost Border (#e5e7eb) sparingly for emphasis, not for every container.
- Do not use multiple font weights within a single text block; use weights to establish hierarchy between elements.
- Do not create complex layouts; default to centered or clearly defined grid structures with ample Canvas Ice (#f8f8f7) as whitespace.

## Layout

The page uses a contained layout with a maximum visible width, ensuring content is centered. The hero section appears full-width with a dark background for contrast, housing textual content and navigation. Subsequent sections utilize alternating light/dark bands, but in the screenshot, the dominant layout is a light canvas (#f8f8f7). Content arrangement primarily consists of centered stacks for interactive elements. There are no obvious multi-column card grids visible in the provided view, but implied horizontal menus suggest a linear, organized flow.

## Imagery

This site predominantly uses clean, minimal UI elements with an icon-only visual language. Icons are outlined, monochrome, and functional, providing visual cues without adding decorative weight. Product screenshots or abstract illustrations are absent, emphasizing a pure UI experience. Imagery is not used for atmosphere or content, but strictly for basic UI interaction cues. The density of imagery is extremely low, making it a text-dominant interface.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Card | rgba(0, 0, 0, 0.02) 0px 12px 32px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Notion | Shares a monochromatic UI, flexible card-based layouts, and a strong emphasis on system fonts and functional aesthetics. |
| Linear | Uses a similarly restrained color palette, subtle elevation, and a focus on clean typography for a productivity-oriented experience. |
| Supabase | Exhibits a clean, developer-tool aesthetic with clear information hierarchy, minimal color, and sharp component definitions. |
| Figma | Features a light, neutral canvas, with functional color accents and a preference for system UI fonts, providing clarity for complex interfaces. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #34322d
background: #f8f8f7
border: #e5e7eb
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
Create a ghost navigation link: Text Secondary (#5e5e5b) color, -apple-system font, 14px, no background or border.
Create an elevated card: Surface Snow (#ffffff) background, 22px radius, 12px vertical padding, rgba(0, 0, 0, 0.02) 0px 12px 32px 0px shadow.
Create an input field with an 'add' icon: Surface Snow (#ffffff) background, 22px radius, with Text Primary (#34322d) for controls. The 'add' icon should be #34322d.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509787217-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509787217-thumb.jpg |
